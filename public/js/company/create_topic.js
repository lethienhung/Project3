Vue.component("topic", {
    template: "#topic-create-template",
    data() {
        return {
            field: '',
            title: '',
            email: document.getElementById('useremail').value,
            documentation: '',
            quantity: '',
            phone_number: '',
            position: '',
            salary: '',
            priority: '',
            content: '',
            other_require: '',
            status: "Pending",
            skill1: '',
            skill2: '',
            skill3: '',
            level1: '',
            level2: '',
            level3: ''

        };

    },
    methods: {
        createTopic() {

            axios.post("/company/topic/create", {
                title: this.title,
                email: this.email,
                documentation: this.documentation,
                quantity: this.quantity,
                phone_number: this.phone_number,
                position: this.position,
                salary: this.salary,
                priority: this.priority,
                content: this.content,
                other_require: this.other_require,
                status: "Pending",
                skill1: this.skill1,
                skill2: this.skill2,
                skill3: this.skill3,
                level1: this.level1,
                level2: this.level2,
                level3: this.level3,
                field: this.field
            }).then(response => {
                alert('Topic have been created!');
            });
        }
    }

});
new Vue({
    el: "#topic-create",

});