Vue.component('evaluate', {

    template: '#evaluate-template',
    data() {
        return {
            evaluate: document.getElementById('old-evaluate').value,
            student_id: document.getElementById('sid').value
        }
    },
    methods: {
        makeEvaluation() {
            axios.post('instructor/evaluate/' + student_id).then((response) => {
                alert('Done evaluate!');
            });
        }
    }
});
new Vue({
    el: "#evaluate"
})