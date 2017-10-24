<template>
    <ul class="intro-social">
        <li><a href="https://github.com/gdmec07150942"><i class="fa fa-github" title="我的github"></i></a></li>
        <li>
            <el-tooltip class="item" effect="dark" content="我的微信号是zuro000" placement="top">
                <i class="fa fa-weixin" title="我的微信"></i>
            </el-tooltip>
        </li>
        <li>
            <el-tooltip class="item" effect="dark" content="我的QQ号是554061700" placement="top">
                <i class="fa fa-qq" title="我的扣扣"></i>
            </el-tooltip>
        </li>
        <li>
            <el-tooltip class="item" effect="dark" content="我的手机号是保密～" placement="top">
                <i class="fa fa-phone" title="我的手机号码"></i>
            </el-tooltip>
        </li>
        <li><a href="http://weibo.com/u/5731550805/home"><i class="fa fa-weibo" title="我的微博"></i></a></li>
    </ul>
</template>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/vendor.css">
<script>
    import {MessageBox} from 'element-ui';
    import ElButton from "../../../../node_modules/element-ui/packages/button/src/button.vue";
    import ElTooltip from "element-ui/packages/tooltip/src/main";

    export default {
        components: {
            ElTooltip,
            ElButton
        },
    }
</script>

