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
```
