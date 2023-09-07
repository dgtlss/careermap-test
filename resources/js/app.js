const { createApp } = Vue;

var app = {
    boot:function(){
        console.log('Welcome to the careermap test app');
        app.jobBoard.boot();
        app.joblisting.boot();
    },
    jobBoard:{
       async boot(){
            const joblist = createApp({
                name: 'joblist',
                data() {
                    return {
                        jobs: [],
                        jobsLoading: true,
                    }
                },
                methods:{
                    async gatherjobs(){
                        this.jobsLoading = true;
                        var alljobs = await axios.get('/jobs/all');
                        if(alljobs.status == 200){
                            this.jobs = alljobs.data.jobs;
                        }else{
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong, please try again or contact support',
                            });
                        }
                        this.jobsLoading = false;
                    },
                    striptitleInitial(title){
                        // get the first letter of the title for use on the avatar
                        return title.charAt(0);
                    },
                    truncateString(str, num) {
                        // If the length of str is less than or equal to num
                        // just return str--don't truncate it.
                        if (str.length <= num) {
                            return str
                        }
                        // Return str truncated with '...' concatenated to the end of str.
                        return str.slice(0, num) + '...'
                    }
                },
                mounted() {
                    this.gatherjobs();
                }
            }).mount('#joblist');
       }
    },
    joblisting:{
        async boot(){
            const joblistingform = createApp({
                name: 'joblistingform',
                data() {
                    return{
                        title: '',
                        description: '',
                    }
                },
                methods:{
                    async createJob(){
                        // first we need to make sure that both fields have been filled in
                        if(this.title == '' || this.description == ''){
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Please fill in all fields before submitting the form',
                            });
                        }else{
                            // both fields have been filled out, we can now send this data to the backend for processing
                            var jobsubmission = await axios.post('/jobs/create',{
                                title: this.title,
                                description: this.description
                            }).then(function(response){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: response.data.message,
                                }).then(function(){
                                    window.location.href = '/job/i/'+response.data.job.id+'';
                                });
                            }).catch(function(error){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong, please try again or contact support',
                                });
                            });
                        }
                    }
                },
                mounted(){

                }
            }).mount('#newjoblistingform');
        }
    }
};