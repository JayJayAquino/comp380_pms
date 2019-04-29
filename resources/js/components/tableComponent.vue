<template>
<div class="row">
<div class="col-md-12">
    <div class="table-component">
        <table class="table">
            <thead>
                <tr class="table__header">
                    <th>First</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td >Mark</td>
                </tr>
                <tr>
                    <td>Jacob</td>
                </tr>
                <tr>
                    <td>Larry</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</template>
<script>
import {mapState} from 'vuex';
import {mapGetters} from 'vuex';

export default {
    data(){
        return{

        }
    },
    computed: {
        ...mapGetters([
            'getRows',
        ])
    },
    methods: {

    }
}
</script>
