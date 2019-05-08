<template>
<div class="body-container">
    <div class="row">
        <div class="col-md-12">
            <p>Tasks</p>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th><input type="checkbox" id="myCheck"></th>
                    <th>Title</th>
                    <th>Due Date</th>
                    <th>Completion</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Deliverable</td>
                    <td>02-18-2019</td>
                    <td>56%</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Deliverable</td>
                    <td>02-18-2019</td>
                    <td>56%</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Deliverable</td>
                    <td>02-18-2019</td>
                    <td>56%</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-danger table-button">Delete</button>
            <button type="button" class="btn button-add table-button" data-toggle="modal" data-target="#myModal">Add</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-dec">
                <h4 class="modal-title">Task Creation</h4>
                <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            Title:<br>
                            <input type="text" name="Title">
                        </div>
                        <div class="col-md-6">
                            Effort Estimation:<br>
                            <input type="text" name="Effort Estimation">
                        </div>
                        <div class="col-md-6">
                            Requirements:<br>
                            <input type="text" name="Requirements">
                        </div>
                        <div class="col-md-6">
                            Due Date:<br>
                            <input type="text" name="Due Date">
                        </div>
                        <div class="col-md-6">
                            Description:<br>
                            <input type="text" name="Description">
                        </div>
                        <div class="col-md-6">
                            Related Issues:<br>
                            <input type="text" name="Related Issues">
                        </div>
                        <div class="col-md-6">
                            Expected Start Date:<br>
                            <input type="text" name="Expected Start Date">
                        </div>
                        <div class="col-md-6">
                            Expected End Date:<br>
                            <input type="text" name="Expected End Date">
                        </div>
                        <div class="col-md-12">
                            Assign to:<br>
                            <select name="Assign to: ">
                                <option value="option1">Adelia A.</option>
                                <option value="option1">Alberto A.</option>
                                <option value="option1">Barb B.</option>
                                <option value="option1">Brian B.</option>
                                <option value="option1">Carla C.</option>
                                <option value="option1">Christopher C.</option>
                            </select>
                        </div>
                    </div>
                </form> 
            </div>
            <div>
                <button type="button" class="modal-footer modal-foot-dec" data-dismiss="modal"><div style="margin-right:45%;">Create</div></button>
            </div>
        </div>
        </div>
    </div>

</div>
</template>

<script></script>
