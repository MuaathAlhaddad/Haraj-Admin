```graphql
# Write your query or mutation here
mutation {
    # sendOTP(phone_no: "01128853086"){
    #   data{
    #   status
    #   message
    #   }
    # }
    # verifyOTP(verification_code: "735522", phone_no: "+601128853086") {
    #   data {
    #     message
    #     status
    #   }
    # }
}

mutation {
    # createUser(
    #   input: {
    #     name: "muaath"
    #     email: "muaath2000@gmail.com"
    #     password: "password"
    #     phone_no: "+6011288523086"
    #     country: { connect: 1 }
    #     state: { connect: 1 }
    #   }
    # ) {
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
    #   created_at
    #   phone_verified_at
    # }


    # verifyOTP(verification_code:"063749", phone_no: "+601128853086" )

    updateUser(
        input: {
            id:12
            name: "muaath"
            email: "muaath2000@gmail.com"
            password: "password"
            country: { connect: 3 }
            state: { connect: 2 }
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
        created_at
        phone_verified_at
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

    # Write your query or mutation here
    mutation {
        # validateEmail(email: "muaath2000@gmail.com") {
        #   id
        #   name
        # }
        validateEmail(email: "albert.rau@example.org") {
            id
            name
        }
    }
    # Write your query or mutation here
    user(id: 2) {
        id
        name
        favorites {
            data {
                id
                favoriteable_id
                favoriteable_type
                ad {
                    id
                    sku
                }
            }
        }
    }

    query {
        car_brands: taxonomyContent(where: { column: TITLE, value: "cars" }) {
            id
            title
            children {
                id
                title
            }
            parent {
                id
                title
            }
        }
        toyota_types: taxonomyContent(where: { column: TITLE, value: "toyota" }) {
            id
            title
            children {
                id
                title
            }
            parent {
                id
                title
            }
        }
    }
    # Write your query or mutation here
    mutation {
        createReview(
            input: {
                body: "this seller is crazy man"
                star: STAR1
                reviewer: { connect: 1 }
                reviewable: { connect: { type: user, id: 2 } }
            }
        ) {
            id
            body
            star
            reviewer {
                id
                name
            }
            reviewable {
                __typename
                ... on User {
                    id
                    name
                }
            }
        }
    }
    query {
        user_reviews: currentUser {
            id
            name
            reviews {
                data {
                    id
                    body
                    star
                }
            }
        }
        ad_reviews: ad(where: { column: ID, value: 1 }) {
            id
            title
            reviews {
                data {
                    id
                    body
                    star
                }
            }
        }
    }
    query {
        all_comments: comments {
            data {
                id
                body
            }
        }
        user_comments: user(id: 1) {
            name
            comments {
                data {
                    body
                }
            }
        }
        ad_comments: ad(where: { column: ID, value: 1 }) {
            title
            comments {
                data {
                    body
                }
            }
        }
    }
    mutation {
        createComment(
            input: {
                body: "this is a new comment"
                user: { connect: 1 }
                ad: { connect: 2 }
            }
        ) {
            id
            body
        }
    }
    mutation {
        createMessage(input: {
            body: "this is my new message"
            sender: {
                connect: 1
            }
            recipient: {
                connect: 2
            }
        }) {
            id
            body
            sender{
                name
            }
            recipient{
                name
            }
        }
    }
```
