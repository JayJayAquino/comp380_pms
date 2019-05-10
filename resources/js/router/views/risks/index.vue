<template>
<div class="col-md-10 body-container">
    <div class="row">
        <div class="col-md-12">
            <p>Risks</p>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th><input type="checkbox" id="myCheck"></th>
                    <th>Title</th>
                    <th>Date Raised</th>
                    <th>Date Assigned</th>
                    <th>Severity</th>
                    <th>Priority</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Risk</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Med</td>
                    <td>Low</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Risk</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Med</td>
                    <td>Low</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Risk</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Med</td>
                    <td>Low</td>
                    <td>Lorem ipsum dolor sit.</td>
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
                        <h4 class="modal-title">Active (ID: AB-227)</h4>
                    </div>
                    <div class="modal-header modal-sub-dec">
                            <div>Risk Score: 75</div>
                    </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            Title:<br>
                            <input type="text" name="Title">
                        </div>
                        <div class="col-md-6">
                            <select name="Category">
                                <option value="option1">Category</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            Action By:<br>
                            <input type="text" name="Action By">
                        </div>
                        <div class="col-md-6">
                            Impact:<br>
                            <input type="text" name="Impact">
                        </div>
                        <div class="col-md-6">
                            Probability:<br>
                            <input type="text" name="Probability">
                        </div>
                        <div class="col-md-6">
                            Mitigation:<br>
                            <input type="text" name="Mitigation">
                        </div>
                        <div class="col-md-6">
                            Contingency:<br>
                            <input type="text" name="Contingency">
                        </div>
                    </div>
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button-add table-button">Confirm</button>
            </div>
        </div>
        </div>

        <div class="col-md-12 active-margin">
            <p>Related Action Items</p>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Date Raised</th>
                    <th>Date Assigned</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>394</td>
                    <td>Action Item</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td>394</td>
                    <td>Action Item</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td>394</td>
                    <td>Action Item</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn button-add table-button" data-toggle="modal" data-target="#myModal">Add</button>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-dec">
                <h4 class="modal-title">Risk Creation</h4>
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
                            <select name="Category">
                                <option value="option1">Category</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            Action By:<br>
                            <input type="text" name="Action By">
                        </div>
                        <div class="col-md-6">
                            Impact:<br>
                            <input type="text" name="Impact">
                        </div>
                        <div class="col-md-6">
                            Probability:<br>
                            <input type="text" name="Probability">
                        </div>
                        <div class="col-md-6">
                            Mitigation:<br>
                            <input type="text" name="Mitigation">
                        </div>
                        <div class="col-md-6">
                            Contingency:<br>
                            <input type="text" name="Contingency">
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