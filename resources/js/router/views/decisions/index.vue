<template>
<div class="col-md-10 body-container">
    <div class="row">
        <div class="col-md-12">
            <p>Decisions</p>
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
                    <td>Decision</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Med</td>
                    <td>Low</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Decision</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Med</td>
                    <td>Low</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Decision</td>
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
            <button type="button" class="btn button-add table-button">Add</button>
        </div>

                <div class="col-md-12 active-margin">
                <div class="modal-content">
                    <div class="modal-header modal-dec">
                        <h4 class="modal-title">Active (ID: AB-227)</h4>
                    </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            Title:<br>
                            <input type="text" name="Title">
                        </div>
                        <div class="col-md-6">
                            Expected End Date:<br>
                            <input type="text" name="Expected End Date">
                        </div>
                        <div class="col-md-6">
                            Description:<br>
                            <input type="text" name="Description">
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
            <p>Related Requirements</p>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Due Date</th>
                    <th>Assigned</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Requirement</td>
                    <td>02-18-2019</td>
                    <td>Barb B.</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Requirement</td>
                    <td>02-18-2019</td>
                    <td>Joan J.</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Requirement</td>
                    <td>02-18-2019</td>
                    <td>Zylon Z.</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn button-add table-button" data-toggle="modal" data-target="#myModal">Add</button>
        </div>

        <div class="col-md-12 active-margin">
            <p>Related Tasks</p>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Due Date</th>
                    <th>Assigned</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Task</td>
                    <td>02-18-2019</td>
                    <td>Barb B.</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Task</td>
                    <td>02-18-2019</td>
                    <td>Joan J.</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Task</td>
                    <td>02-18-2019</td>
                    <td>Zylon Z.</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn button-add table-button" data-toggle="modal" data-target="#myModal">Add</button>
        </div>
    </div>
</div>
</template>

<script></script>
