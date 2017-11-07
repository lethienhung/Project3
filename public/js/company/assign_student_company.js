new Vue({
    el: "#student-assign",
    data: {

        list: [],

    },
    created() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            axios.get('/get/assignment').then((response) => {
                this.list = response.data;
            });
        },
        approve(student_id) {
            axios.post("/company/assign/approve/" + student_id).then(response => {
                alert("Done Approved");
            });
        },
        decline(student_id) {
            axios.post("/company/assign/decline" + student_id).then(response => {
                alert("Done Decline");
            });
        },
        pickStudent(student_id) {
            axios.post("/company/assign/pick/" + student_id).then(response => {
                alert("You have picked this student!");
            });
        }
    }
});