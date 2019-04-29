<template>
	<div>
        <div class="row">
            <div class="col-md-12">
                <navbar></navbar>
            </div>
        </div>
		<main class="contentWrapper">
            <div class="row">
                <sidebar></sidebar>
                <router-view></router-view>
            </div>
		</main>
	</div>
</template>

<script>
import navbar from './components/global/navbar.vue';
import sidebar from './components/global/sidebar.vue';
export default {
    components: {
        navbar,
        sidebar,
    }
}
</script>
