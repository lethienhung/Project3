new Vue({
    el: '#add-to-period',
    data: {
        list: [],
        period_id: document.getElementById('this_period').value,
        show: true,
        added: []

    },

    created() {
        this.fetchData();
    },

    methods: {
        fetchData() {
            axios.get('/fetch/student/' + this.period_id).then(response => {
                this.list = response.data;
            });
            axios.get('/get/student/' + this.period_id).then(response => {
                this.added = response.data;
            })
        },
        add(student_id, index) {
            show = !this.show;
            this.added.push(this.list[index]);
            this.list.splice(index, 1);
            axios.post("/period/add", {
                period_id: this.period_id,
                student_id
            }).then(response => {
                alert("Student has beed Added");
            })
        }
    }
});