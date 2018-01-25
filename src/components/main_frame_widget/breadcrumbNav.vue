<template>
    <Breadcrumb>
        <BreadcrumbItem
            v-for="item in currentPath"
        >
            {{item}}
        </BreadcrumbItem>
    </Breadcrumb>
</template>
<script type="text/ecmascript-6">
    export default {
        name:'breadcrumbNav',
        props:{
            currentPath:Array
        },
        methods:{

        }
    }
</script>