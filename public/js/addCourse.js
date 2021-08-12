new Vue({
    el: '#app',
    data: {
      storage: [
      
        
      ],
      length: 0,
      category: '',
      staff: '',
      course: ''
  
    },
    methods: {
      
   say: function (msg) {
       alert(msg)
        
         //data.staff= 'casa'
       //eliminar elemento   //this.storage.splice(msg,1);
     this.$set(this.storage,'course',1,'course')  
        this.$set(this.storage,'category',1,'course') 
     
      },
      
      addCourse: function() {
        if (!(this.course && this.staff && this.category)) {
          return
        }
        this.storage.push({
          course: this.course,
          staff: this.staff,
          category: this.category,
        });
        this.length++;
        this.course = '';
        this.staff = '';
        this.category = '';
      },
      removeCourse: function(data) {
        this.storage = this.storage.filter((value) => data != value);
        this.length--;
      }
      
      
      
    
    }
  
  
  });