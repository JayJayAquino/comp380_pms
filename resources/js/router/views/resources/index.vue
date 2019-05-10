<template>
<div class="col-md-10 body-container">
    <div class="row">
        <div class="col-md-12">
            <h4>Resources</h4>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th><input type="checkbox" id="myCheck"></th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Pay Rate</th>
                    <th>Skills</th>
                    <th>Availability</th>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Resource</td>
                    <td>Rodger Rabbit</td>
                    <td>Pay Rate</td>
                    <td>Skills</td>
                    <td>Availability</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Resource</td>
                    <td>Bugs Bunny</td>
                    <td>Pay Rate</td>
                    <td>Skills</td>
                    <td>Availability</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Resource</td>
                    <td>Daffy Duck</td>
                    <td>Pay Rate</td>
                    <td>Skills</td>
                    <td>Availability</td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-danger table-button">Delete</button>
            <button type="button" class="btn button-add table-button" data-toggle="modal" data-target="#myModal">Add</button>
        </div>
        
        <div class="col-md-12 active-margin">
                <div class="modal-content">
                    <div class="modal-header modal-dec">
                        <h5 class="modal-title">Active (ID: AB-227)</h5>
                    </div>
                    <div class="modal-header modal-sub-dec">
                            <div>Name: Jessica Rabbit</div>
                    </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            Title:<br>
                            <input type="text" name="Title">
                        </div>
                        <div class="col-md-6">
                            Pay Rate:<br>
                            <input type="text" name="Pay Rate">
                        </div>
                        <div class="col-md-6">
                            Skills:<br>
                            <input type="text" name="Skills">
                        </div>
                        <div class="col-md-6">
                            Availability:<br>
                            <input type="text" name="Availability">
                        </div>
                    </div>
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button-add table-button">Confirm</button>
            </div>
        </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-dec">
                <h4 class="modal-title">Resource Creation</h4>
                <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            Position:<br>
                            <input type="text" name="Position">
                        </div>
                        <div class="col-md-6">
                            Pay Rate:<br>
                            <input type="text" name="Pay Rate">
                        </div>
                        <div class="col-md-6">
                            Skills:<br>
                            <input type="text" name="Skills">
                        </div>
                        <div class="col-md-6">
                            Availability:<br>
                            <input type="text" name="Availability">
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