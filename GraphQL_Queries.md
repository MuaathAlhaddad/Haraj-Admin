```graphql
# Write your query or mutation here
mutation {
    # createUser(input: { phone_no: "+601128853086", country: { connect: 1 } }) {
    #   id
    #   name
    #   email
    #   phone_no
    #   phone_verified_at
    #   state {
    #     id
    #     name
    #   }
    #   country {
    #     id
    #     name
    #   }
    # }

    # verifyOTP(verification_code:"063749", phone_no: "+601128853086" )

    updateUser(
        input: {
            id: 13
            name: "muaath"
            email: "muaath2000@gmail.com"
            password: "01128853086"
            gender: "m"
            state: { connect: 1 }
        }
    ) {
        id
        name
        email
        phone_no
        phone_verified_at
        state {
            id
            name
        }
        country {
            id
            name
        }
    }
}

query {
    ad(where:{column:ID, operator:EQ, value: 1}) {
        id
        sku
        taxomomyContents{
            data{
                title
            }
        }
    }
}

# Write your query or mutation here
mutation {
    createAd(
        input: {
            title: "iphone 6"
            description: "this is a desc for my iphone 5,please contact if you are sersious"
            price: 1500
            negotiable: 1
            user: {connect: 1}
            taxonomyContents: {connect:[2, 62, 220]}
        }
    ) {
        id
        sku
        title
        description
        price
        negotiable
        created_at
        user{
            id
            name
        }
        taxonomyContents{
            data{
                title
            }
        }
    }
}

query {
    #####################
    # get all harajs
    ####################
    taxonomyContent {
        harajs {
            title
        }
        tags{
            title
        }
    }

    #####################
    # get parent and types
    ####################
    # taxonomyContent(where: { column: TITLE, operator: LIKE, value: "%toyota%" }) {
    #   id
    #   title
    #   parent {
    #     id
    #     title
    #   }
    #   types {
    #     title
    #   }
    # }

    #####################
    # get brands and models
    #################### 
    # taxonomyContent(where: { column: TITLE, operator: LIKE, value: "%cars%" }) {
    #   id
    #   title
    #   brands {
    #     title
    #   }
    #   models {
    #     title
    #   }
    # }
}

mutation {
    #   createFavorite(
    #     input: {favoriteable_id: 1, favoriteable_type:ad, user:{connect:3} }
    #   ) {
    #     id
    #     favoriteable_id
    #     favoriteable_type
    #   }

    deleteFavorite(id: 3) {
        id
        favoriteable_id
        favoriteable_type
        user {
            id
            name
        }
    }
}

```
