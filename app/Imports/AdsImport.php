<?php

namespace App\Imports;

use App\Models\Ad;
use App\Models\Attachment;
use App\Models\State;
use App\Models\Taxonomy;
use App\Models\TaxonomyContent;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AdsImport implements ToCollection, WithHeadingRow
{

    public function collection( Collection $rows )
    {
        $harajs_id = Taxonomy::whereType( Taxonomy::TYPE_HARAJS )->pluck( 'id' )->first();
        $others_id = Taxonomy::whereType( Taxonomy::TYPE_OTHERS )->pluck( 'id' )->first();
        $brands_id = Taxonomy::whereType( Taxonomy::TYPE_BRANDS )->pluck( 'id' )->first();
        $models_id = Taxonomy::whereType( Taxonomy::TYPE_MODELS )->pluck( 'id' )->first();
        $types_id  = Taxonomy::whereType( Taxonomy::TYPE_TYPES )->pluck( 'id' )->first();

        foreach ( $rows as $index => $row )
        {
            $user = User::updateOrCreate(
                [ 'phone_no' => $row[ 'contact' ] ],
                [
                    'name'       => $row[ 'shop_name' ],
                    'password'   => Hash::make( 'password' ),
                    'country_id' => 201, //Somalia
                    'state_id'   => $this->getStateId( $row[ 'state' ] )
                ]
            );

            $ad = Ad::create( [
                'title'       => $row[ 'ad_name' ] ?? 'No Title',
                'description' => $row[ 'description' ],
                'price'       => (float)preg_replace( "/[^0-9]/", "", $row[ 'price' ] ),
                'negotiable'  => (bool)$row[ 'negotiable' ],
                'status'      => 'published',
                'user_id'     => $user->id,
            ] );

            if ( $row[ 'file_name' ] )
            {
                Attachment::create( [
                    'attachable_id'   => $ad->id,
                    'attachable_type' => 'ad',
                    'type'            => "photo",
                    'path'            => $row[ 'file_name' ],
                    'disk_name'       => "",
                    'file_name'       => $row[ 'file_name' ],
                    'thumbnail'       => 1
                ] );
            }

            $related_taxonomies = collect();

            if ( $row[ 'suuq' ] )
            {
                $suuq = TaxonomyContent::updateOrCreate(
                    [ 'title' => $row[ 'suuq' ] ],
                    [
                        'taxonomy_id'  => $harajs_id,
                        'published_at' => now(),
                        'parent_id'    => null,
                        'lang'         => 'en',
                        'icon'         => 'fa fa-car'
                    ]
                );

                $related_taxonomies->push( $suuq->id );

                if ( $row[ 'brand' ] )
                {
                    $brand = TaxonomyContent::updateOrCreate(
                        [ 'title' => $row[ 'brand' ] ],
                        [ 'taxonomy_id'  => $brands_id,
                          'published_at' => now(),
                          'parent_id'    => $suuq->id,
                          'lang'         => 'en',
                          'icon'         => 'fa fa-car'
                        ]
                    );

                    $related_taxonomies->push( $brand->id );

                }

                if ( $row[ 'model' ] )
                    $model = TaxonomyContent::updateOrCreate(
                        [ 'title' => $row[ 'model' ] ],
                        [
                            'taxonomy_id'  => $models_id,
                            'published_at' => now(),
                            'parent_id'    => $brand->id ?? $suuq->id,
                            'lang'         => 'en',
                            'icon'         => 'fa fa-car'
                        ]
                    );

                $related_taxonomies->push( $model->id );

                if ( $row[ 'typeyear' ] )
                {
                    $type_year = TaxonomyContent::updateOrCreate(
                        [ 'title' => $row[ 'typeyear' ] ],
                        [
                            'taxonomy_id'  => $types_id,
                            'published_at' => now(),
                            'parent_id'    => $model->id ?? $brand->id ?? $suuq->id,
                            'lang'         => 'en',
                            'icon'         => 'fa fa-car'
                        ]
                    );

                    $related_taxonomies->push( $type_year->id );
                }
            } else
            {
                $others = TaxonomyContent::updateOrCreate(
                    [ 'title' => 'others' ],
                    [
                        'taxonomy_id'  => $others_id,
                        'published_at' => now(),
                        'parent_id'    => null,
                        'lang'         => 'en',
                        'icon'         => 'fa fa-car'
                    ]
                );

                $related_taxonomies->push( $others->id );
            }

            $ad->taxonomyContents()->sync( $related_taxonomies );
        }
    }

    /**
     * @param $state
     * @return int|null
     */
    private function getStateId( $state ): int|null
    {
        if ( Str::startsWith( $state, [ 'Hagreisa', 'Hargeisa', 'Hargiesa' ] ) )
        {
            return State::whereName( 'Hargeisa' )->pluck( 'id' )->first();
        }

        if ( $state === 'Puntland' )
        {
            return State::whereName( 'Puntland' )->pluck( 'id' )->first();
        }

        return null;
    }
}
