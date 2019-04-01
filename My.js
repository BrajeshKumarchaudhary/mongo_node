class User {

    constructor(name) {
        this.env = name;
    }

    sayHi() {
        switch (this.env)
        {
            
            case 'uat':
                console.log('uat')
                break;
            case 'prod':
                console.log('production');
                break;
            default:
                console.log('no matching Environment');
        }
    }

}

let user = new User("uatscasc");
user.sayHi();