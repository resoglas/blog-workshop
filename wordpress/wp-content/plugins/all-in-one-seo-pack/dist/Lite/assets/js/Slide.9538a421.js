import{n as s}from"./vueComponentNormalizer.67c9b86e.js";var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n(t.tag,{ref:"container",tag:"component",style:t.style,attrs:{"aria-hidden":!t.active,"aria-expanded":t.active},on:{transitionend:t.onTransitionEnd}},[t.hidden?t._e():t._t("default")],2)},o=[];const a={props:{active:Boolean,duration:{type:Number,default:500},tag:{type:String,default:"div"},useHidden:{type:Boolean,default:!0}},data(){return{style:{},initial:!1,hidden:!1}},watch:{active(){this.$nextTick(()=>{this.layout()})}},mounted(){this.layout(),this.initial=!0},created(){this.hidden=!this.active},computed:{el(){return this.$refs.container&&this.$refs.container.$el?this.$refs.container.$el:this.$refs.container||null}},methods:{layout(){this.active?(this.hidden=!1,this.$emit("open-start"),this.initial&&this.setHeight("0px",()=>this.el.scrollHeight+"px")):(this.$emit("close-start"),this.setHeight(this.el.scrollHeight+"px",()=>"0px"))},asap(t){this.initial?this.$nextTick(t):t()},setHeight(t,e){this.style={height:t},this.asap(()=>{this.__=this.el.scrollHeight,this.style={height:e(),overflow:"hidden","transition-property":"all","transition-duration":this.duration+"ms"}})},onTransitionEnd(t){t.target===this.el&&(this.active?(this.style={},this.$emit("open-end")):(this.style={height:"0",overflow:"hidden"},this.hidden=!0,this.$emit("close-end")))}}},i={};var l=s(a,r,o,!1,h,null,null,null);function h(t){for(let e in i)this[e]=i[e]}const u=function(){return l.exports}();export{u as T};
