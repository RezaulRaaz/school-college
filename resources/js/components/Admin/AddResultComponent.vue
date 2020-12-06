<template>
  <div>
    <div class="row">
      <div class="col-lg-4">
        <h3>Add New Markshet</h3>
        <div class="form-group">
          <label for="img">Select Institute</label>
          <auto-compete
            required
            v-model="insSelected"
            input-class="form-control"
            :source="instutes"
            placeholder="Select Institute"
            :results-display="instutes.Website_college_code"
          >
            ></auto-compete
          >
        </div>
        <div class="form-group">
          <label for="img">Select Class</label>
          <auto-compete
            v-model="classSelected"
            input-class="form-control"
            :source="classes1"
            placeholder="Select Class"
            :results-display="instutes.Website_college_code"
          >
            ></auto-compete
          >
        </div>
        <div class="form-group">
          <label for="yearPicker">Select Year</label>
          <input
            class="form-control"
            v-model="year"
            type="month"
            id="yearPicker"
          />
        </div>
        <div class="form-group">
          <label for="yearPicker">Select Exam</label>
          <select class="form-control" v-model="selectExam" id="yearPicker">
            <option v-for="exaam in Exam" :value="exaam.id" :key="exaam.id">
              {{ exaam.exam_name }}
            </option>
          </select>
        </div>
        <div class="form-group">
          <label for="yearPicker">Student Name</label>
          <input
            type="text"
            v-model="StudentName"
            class="form-control"
            placeholder="Student Name"
          />
        </div>
        <div class="form-group">
          <label for="yearPicker">Student Roll</label>
          <input
            type="text"
            v-model="StudentRoll"
            class="form-control"
            placeholder="Student Roll Number"
            @keyup="marksheetget"
          />
        </div>
      </div>
      <div class="col-lg-6">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Subject Name</th>
              <th scope="col">Subject Marks</th>
              <th scope="col">Grade</th>
              <th scope="col">Optional</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>
                <input
                  type="text"
                  v-model="subjectname"
                  id="subject"
                  class="form-control"
                  placeholder="Name"
                />
              </td>
              <td>
                <input
                  type="number"
                  v-model="marks"
                  id="Marks"
                  class="form-control"
                  placeholder="Marks"
                />
              </td>
              <td>
                <input
                  type="text"
                  v-model="gpa"
                  id="Marks"
                  readonly
                  class="form-control"
                  :placeholder="inputGpa"
                  value="inputGpa"
                />
              </td>
              <td class="text-center" >
                  <input v-model="sub_optional" type="checkbox" class="form-check-input" id="exampleCheck1">
              </td>
            </tr>
          </tbody>
        </table>
        <button
          type="submit"
          @click.prevent="addMark"
          class="btn btn-primary float-right"
        >
          Add
        </button>
        <br />
        <table class="table table-hover table-striped text-center mt-4">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Subject Name</th>
              <th scope="col">Marks</th>
              <th scope="col">GPA</th>
              <th scope="col">Optional</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(mark,index) in getMarksheet" :key="mark.id">
              <th scope="row">{{index+1}}</th>
              <td>{{ mark.subject_name }}</td>
              <td>{{ mark.subject_marks }}</td>
              <td >

              </td>
              <td>{{(mark.subject_optional!=0)?'Yes':'No'}}</td>
              <td>
                <a href="#" class="badge badge-success badge-md text-center"
                  ><i class="fa fa-pencil"></i
                ></a>
                <a
                  href="#"
                  @click.prevent="deleteMarks(mark.id,index)"
                  class="badge badge-danger badge-md text-center"
                  >x</a
                >
              </td>
            </tr>
          </tbody>
          <tfoot class="table-success">
            <th></th>
            <th></th>
            <th></th>
            <th><h6 class="font-weight-bold">Grade = {{totalPoint}}</h6></th>
            <th><h6 class="font-weight-bold">Total GPA = A</h6></th>
            <th></th>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "AddResultComponent",

  data() {
    return {
      year: "",
      classSelected: "",
      insSelected: "",
      instutes: [],
      classes1: [],
      CollegeCode: [],
      Exam: [],
      selectExam: 1,
      subjectname: "",
      gpa: "",
      marks: "0",
      StudentName: "",
      StudentRoll: "",
      sub_optional: false,
      totalPoint:'',
      getMarksheet: [],
    };
  },

  mounted() {
    this.dataGet();
    // this.marksheetget()
  },
  methods: {

    addMark() {
      var d = new Date(this.year);
      var yeart = d.getFullYear();
      axios
        .post("/admin/mark/result/add", {
          student_name: this.StudentName,
          student_roll: this.StudentRoll,
          selectExam: this.selectExam,
          year: yeart,
          classSelected: this.classSelected,
          insSelected: this.insSelected,
          subjectname: this.subjectname,
          marks: this.marks,
          sub_optional: this.sub_optional,
        })
        .then((response) => {
          this.subjectname = "";
          this.marks = "";
          console.log(response.data.Success);
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .then(function () {
          // always executed
        });
      this.marksheetget();
    },

    marksheetget() {
      var d = new Date(this.year);
      var yeart = d.getFullYear();
      axios
        .get(
          "/admin/marksheet/" +
            this.StudentRoll +
            "/" +
            this.selectExam +
            "/" +
            yeart +
            "/" +
            this.classSelected +
            "/" +
            this.insSelected
        )
        .then((response) => {
          this.getMarksheet = response.data.marksheet;
        //   this.totalPoint = response.data.Gpa;

          if(response.data.isFail>0){
                this.totalPoint='Failed'
          }else if(response.data.Gpa>=5.00){
              this.totalPoint='5.00'
          }else if(response.data.Gpa<5.00){
              this.totalPoint=response.data.Gpa
          }else{
              this.totalPoint=response.data.Gpa
          }
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .then(function () {
          // always executed
        });
    },
        deleteMarks(id) {
      axios
        .get("/admin/marks/delete/" + id)
        .then((response) => {
          this.marksheetget();
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .then(function () {
          // always executed
        });
    },

    dataGet() {
      axios.get("/admin/institute/get").then((response) => {
        let classone = response.data.classes;
        classone.map((data) => {
          this.classes1.push({ name: data.class_name, id: data.id });
        });
        let instutes = response.data.institutes;
        instutes.map((data) => {
          this.instutes.push({
            name: data.name + "( " + data.Website_college_code + " )",
            id: data.id,
          });
        });
        this.Exam = response.data.exam;
      });
    },
  },
  computed: {
      inputGpa(){
         let marks = this.totalPoint;
         if(marks<1){
             this.gpa= 'F'
         }else if(marks<= 39){
             this.gpa= 'D'
         }else if(marks<= 49){
             this.gpa= 'C'
         }else if(marks<= 59){
             this.gpa= 'B'
         }else if(marks<= 69){
             this.gpa= 'A-'
         }else if(marks<= 79){
             this.gpa= 'A'
         }else if(marks<= 100){
             this.gpa= 'A+'
         }else{
             this.gpa= 'Marks invalid'
         }
      },
  }
};
</script>
<style>
.autocomplete__icon {
  height: 14px;
  width: 14px;
  display: none;
}
</style>
