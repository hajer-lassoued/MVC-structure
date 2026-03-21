<style>

form {
    max-width: 600px;
    margin: 50px auto 0;
}
fieldset {
    padding: 20px;
    background-color: #f7f4f4;
    border: None;
}
legend {
    padding: 10px;
    background-color: #e7e7e7;
}
.appForm input , textarea{
    width: 100%;
    border: None;
    padding: 15px 5px;
    font-size: 16px;
    margin-top: 10px;
}
input#submit {
    display: table;
}
input.no_float {
    width: auto;
    background-color: #275f24;
    color:#FFF;
    border-radius: 3px;
    padding: 10px;
}
</style>


<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend>Employee Information</legend>
        <div class="input_wrapper n40 border">
            <label>Employee Name</label>
            <input required type="text" name="name" id="name" maxlength="50" placeholder="write employee name here">
        </div>
        <div class="input_wrapper n30 border">
            <label>Employee Age</label>
            <input required type="number" min="22" max="60" name="age" id="age" placeholder="write employee age here">
        </div>
        <div class="input_wrapper n40 padding border">
            <label>Employee Adresse</label>
            <input required type="text" id="address" name="address" maxlength="100" placeholder="write employee Age here">
        </div>
        <div class="input_wrapper n20 padding border">
            <label>Employee Salary</label>
            <input required type="number" id="salary" step="0.01" name="salary" min="1500" max="9000" placeholder="write employee salary here">
        </div>
        <div class="input_wrapper n20 padding border">
            <label>Employee Tax</label>
            <input required type="float" id="tax" step="0.01" name="tax" min="1" max="5" placeholder="write employee Tax here">
        </div>
        <input class="no_float" type="submit" name="submit" value="save">
    </fieldset>
</form>