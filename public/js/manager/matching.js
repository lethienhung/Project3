Vue.component('match', {
    template: '#matching-template',



});



new Vue({
    el: "#accordion1",
    data: {

        students: [],
        topics: [],
        assigned: []

    },
    created() {
        this.fetchStudentsList();
        this.fetchTopicsList();
    },
    methods: {
        fetchStudentsList() {
            axios.get("/fetchstudentslist").then(response => {
                this.students = response.data;
            });
        },

        fetchTopicsList() {
            axios.get("/fetchtopicslist").then(response => {
                this.topics = response.data;
            })
        },

        assign(student_id, topic_id, index) {
            
            this.students.splice(index, 1)
            axios.post('/assign', {
                student_id,
                topic_id
            }).then(response => {
                alert('Đã phân công' + student_id + "vào topic" + topic_id);
            })
        }

    }
});