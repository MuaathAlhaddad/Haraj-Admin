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
    query {
        # get all users the curent user intracted with
        interacted_users: messages(
            where: { OR: [{ column: FROM_ID, value: 1 }, { column: TO_ID, value: 1 }] }
            orderBy: { column: CREATED_AT, order: ASC }
        ) {
            data {
                sender {
                    id
                    name
                }
            }
        }

        #   get all messages with the particular user
        messages(
            where: {
                OR: [
                    { AND: [{ column: FROM_ID, value: 2 }, { column: TO_ID, value: 1 }] }
                    { AND: [{ column: FROM_ID, value: 1 }, { column: TO_ID, value: 2 }] }
                ]
            }
            orderBy: { column: CREATED_AT, order: ASC }
        ) {
            data {
                body
                created_at
                sender {
                    id
                    name
                }
                recipient {
                    id
                    name
                }
            }
        }
    }


    #################################
    # Ad Query and Mutation
    ################################
    # mutation {
    # deleteAd(id:54){
    #   id
    #   sku
    # }

    # restoreAd(id:54) {
    #   id
    #   title
    # }
    
    mutation {
        updateAd(
            id: 55
            input: {
                title: "new title"
                description: "new desc"
                price: 12
                attachments: { delete: [1, 2, 55], connect: [5] }
            }
        ) {
            id
            title
            description
            price
            attachments {
                data {
                    id
                    path
                }
            }
        }
    }

    # query{
    #   to get only the deleted ads
    # ads(trashed:ONLY){
    #   data{
    #     id
    #     sku
    #     title
    #     description
    #   }
    # }
    #   to get all deleted and not deleted
    # ads(trashed:WITH){
    #   data{
    #     id
    #     sku
    #     title
    #     description
    #   }
    # }
    # }

    #################################
    # TaxonomyContent Query and Mutation
    ################################
    mutation {
        # createTaxonomyContent(input:{
        #   title: "proton"
        #   description: "this is a new brand category"
        #   taxonomy: {connect:2}
        #   parent:{connect:1}
        #   lang:en
        # }
        # ){
        #   id
        #   title
        #   description
        #   taxonomy{
        #     type
        #   }
        #   parent{
        #     title
        #   }
        # }

        #   create new harajs with icon
        # createTaxonomyContent(
        #   input: {
        #     title: "brids"
        #     description: "this is a new haraj category"
        #     taxonomy: { connect: 1 }
        #     lang: en
        #     icon: "fas fa-horse"
        #   }
        # ) {
        #   id
        #   title
        #   icon
        #   description
        #   taxonomy {
        #     type
        #   }
        # }
    }

    #################################
    # User Query and Mutation
    ################################
    mutation{
        #   deleteUser(id:1){
        #     id
        #     name
        #     email
        #   }

        # restoreUser(id:1){
        #   id
        #   name
        #   email
        # }
    }

    mutation {
        loginAdmin(input: { email: "admin@example.com", password: "admin" }) {
            access_token
            token_type
            isAdmin
        }
    }

    #########################################
    # update, delete and restore taxonomyContent
    ########################################
    mutation {
        # createTaxonomyContent(input:{
        #   title: "test taxno"
        #   description:"this is a test taxonomycontent"
        #   taxonomy: {connect:1}
        #   icon:"new icon"
        #   lang:en
        # }) {
        #   id
        #   title
        #   description
        #   parent{
        #     id
        #     title
        #   }
        #   taxonomy{
        #     id
        #     type
        #   }
        # }
        # updateTaxonomyContent(
        #   id: 309
        #   input: {
        #     title: "change the title please"
        #     description: "change the desc too"
        #     taxonomy: { connect: 2 }
        #     parent: { connect: 2 }
        #     icon: "fa amer-face"
        #     lang: ar
        #   }
        # ) {
        #   id
        #   title
        #   description
        #   parent {
        #     id
        #     title
        #   }
        #   taxonomy {
        #     id
        #     type
        #   }
        # }
        # deleteTaxonomyContent(id:309){
        #   id
        #   title
        #   deleted_at
        # }
        # restoreTaxonomyContent(id:309){
        #   id
        #   title
        #   deleted_at
        # }
    }

    query {
        user(id: 1) {
            id
            attachments {
                data {
                    id
                    attachable_id
                    attachable_type
                    path
                }
            }
        }
    }

    mutation {
        # login(input: { phone_no: "09504644684", password: "password" }) {
        #   access_token
        #   token_type
        # }
        updateUser(
            id: 1
            input: {
                name: "muaath"
                gender: "m"
                email: "muaath2000@gmail.com"
                password: "password"
                country: { connect: 3 }
                state: { connect: 2 }
                attachments: {
                    create: {
                        file_name: "profile"
                        type: PHOTO
                        thumbnail: true
                        path: "https://i.pinimg.com/originals/ae/ec/c2/aeecc22a67dac7987a80ac0724658493.jpg"
                    }
                    delete: [62, 63, 64]
                }
            }
        ) {
            id
            name
            email
            attachments {
                data {
                    id
                    attachable_id
                    attachable_type
                    type
                    path
                }
            }
        }
    }

    # Write your query or mutation here
    mutation {
        createReportContent(input: { body: "wrong info", type: option }) {
            id
            body
            type
        }
        createReport(
            input: {
                body: null
                reporter: { connect: 1 }
                reportContent: { connect: 1 }
                reportable: { connect: { type: ad, id: 1 } }
            }
        ) {
            id
            body
            reporter {
                id
                name
            }
            reportContent {
                type
            }
            reportable {
                __typename
                ... on Ad {
                    id
                    sku
                }
            }
        }
    }

    # Write your query or mutation here
    query {
        reportContents {
            id
            body
            type
            reports {
                data {
                    body
                    reporter {
                        id
                        name
                    }
                    reportable {
                        __typename
                        ... on Ad {
                            id
                            sku
                        }
                    }
                }
            }
        }
        reports {
            data {
                id
                body
                reporter {
                    id
                    name
                }
                reportContent {
                    type
                }
                reportable {
                    __typename
                    ... on Ad {
                        id
                        sku
                    }
                }
            }
        }
    }


mutation{
  markChatAsRead(to_id:1, from_id:2)

  markReviewsRead(user_id:1)
    
  markCommentsRead(user_id:1)
}
```
