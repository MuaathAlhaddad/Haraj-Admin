<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\TwilioService\VerifyServiceInterface;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

/**
 * GraphQL User Mutation
 */
class UserMutator
{

    public function __construct(protected VerifyServiceInterface $verifyService)
    {
    }

    /**
     * Create a new user instance after sending an OTP code to their phone number.
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return User
     */
    public function create($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo): User
    {
        $this->verifyService->sendOTP($args['phone_no']);

        return (new User)->firstStepRegistration($args, (int)$args['country']['connect']);
    }

    /**
     * verify the given code against the code associated with the given phone number.
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return string
     */
    public function verifyOTP($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo): string
    {
        return $this->verifyService->verify($args);
    }
}
