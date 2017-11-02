Vue.component("topic", {
    template: "#topic-create-template",
    data() {
        return {
            title:'',
            email: '',
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
            axios.post("/company/topic/create").then(response => {
                alert("Topic Created!");
            });
        }
    }
    
});
new Vue({
    el: "#topic-create",
    
});