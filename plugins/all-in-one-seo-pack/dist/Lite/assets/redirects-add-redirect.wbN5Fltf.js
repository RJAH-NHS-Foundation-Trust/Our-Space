import"./js/vue2.B3EPUlhG.js";import{y as a,c as h,D as f,m as n,d,o as c,E as _,t as g,a as y,l as R,Y as C}from"./js/vue.esm-bundler.DzelZkHk.js";import{l as A}from"./js/index.DmkhSBhC.js";import{l as w}from"./js/index.DX4OhBfI.js";import{u as k,s as S,l as E}from"./js/links.CKSg78-h.js";/* empty css                */import{a as L}from"./js/addons.Bhqo_sme.js";import{C as v}from"./js/Index.6gbvf_mk.js";import{C as H}from"./js/Index.BM2l6rZx.js";import{_ as b}from"./js/_plugin-vue_export-helper.BN1snXvA.js";import{i as x}from"./js/isEmpty.BWu-tYPE.js";import"./js/translations.B4Iz5cbd.js";import"./js/default-i18n.BtxsUzQk.js";import"./js/constants.DARe-ccJ.js";import"./js/Caret.Cuasz9Up.js";import"./js/isArrayLikeObject.CkjpbQo7.js";import"./js/upperFirst.Cx8cdEgZ.js";import"./js/_stringToArray.DnK4tKcY.js";import"./js/toString.EVG10Qqs.js";import"./js/JsonValues.D25FTfEu.js";import"./js/strings.gPxlDykU.js";import"./js/isString.Dmb68Xbt.js";import"./js/ProBadge.Dgq0taM8.js";import"./js/External.bx7ZSfw_.js";import"./js/Exclamation.BU2oeqa4.js";import"./js/Checkbox.CfGJSeWE.js";import"./js/Checkmark.Du5wcsnR.js";import"./js/Gear.CzHv0eD2.js";import"./js/Slide.BfXXFx9A.js";import"./js/Date.Bc79vv_Y.js";import"./js/DatePicker.9jCaxc1v.js";import"./js/get.CmvQfcJ_.js";import"./js/isUndefined.2CoGFx8R.js";import"./js/_getTag.0B4_HiWU.js";import"./js/debounce.vOAperWf.js";import"./js/toNumber.DHWd7Z3r.js";import"./js/_baseTrim.BYZhh0MR.js";import"./js/Tooltip.DcUmvaHX.js";import"./js/Plus.CShy191p.js";const $={setup(){return{rootStore:k()}},components:{CoreModal:v,CoreAddRedirection:H},data(){return{addons:L,urls:[],display:!1,target:null,loading:!1,strings:{modalHeader:this.$t.__("Add a Redirect",this.$td),redirectAdded:this.$t.sprintf(this.$t.__('%2$sYour redirect was added and you may edit it <a href="%1$s" target="_blank">here</a>.%3$s',this.$td),this.rootStore.aioseo.urls.aio.redirects,"<strong>","</strong>")},watchClasses:["aioseo-redirects-slug-changed","aioseo-redirects-trashed-post"]}},computed:{classSelectors(){return"."+this.watchClasses.join(", .")}},methods:{reload(){var e,o;this.display=!1;const t=(o=(e=this.target)==null?void 0:e.parentElement)==null?void 0:o.parentElement;if(t&&(t.classList.contains("components-notice__content")||t.classList.contains("notice"))){t.innerHTML="<p>"+this.strings.redirectAdded+"</p>";return}this.target.outerHTML=this.strings.redirectAdded},loadRedirect(t){this.loading=!0,S.get(this.$links.restUrl("redirects/manual-redirects/"+t)).then(e=>{this.urls=e.body.redirects,this.loading=!1}).catch(e=>console.error("Redirect modal failed to load the redirect data.",e))},preloadRedirect(){const t=document.querySelector(this.classSelectors);if(t){const e=this.getElementRedirectHash(t);if(!e)return;this.loadRedirect(e)}},watchClicks(){document.body.onclick=t=>{var o;if(!((o=t.target)!=null&&o.classList))return;let e=!1;this.watchClasses.forEach(i=>{t.target.classList.contains(i)&&(e=!0)}),e&&(t.preventDefault(),this.target=t.target,this.display=!0,x(this.url)&&this.loadRedirect(this.getElementRedirectHash(this.target)))}},getElementRedirectHash(t){return new URLSearchParams(t.href).get("aioseo-manual-urls")}},async created(){this.preloadRedirect(),this.watchClicks(),window.aioseoBus.$on("wp-core-notice-created",()=>{this.preloadRedirect()})}},B={key:0,class:"aioseo-redirects-add-redirect-standalone"},D={class:"bd"};function N(t,e,o,i,r,p){const m=a("core-add-redirection"),u=a("core-modal");return r.addons.isActive("aioseo-redirects")?(c(),h("div",B,[f(u,{show:r.display,classes:["aioseo-redirects"],onClose:e[0]||(e[0]=T=>r.display=!1)},{headerTitle:n(()=>[_(g(r.strings.modalHeader),1)]),body:n(()=>[y("div",D,[r.loading?d("",!0):(c(),R(m,{key:0,urls:r.urls,target:r.urls[0].target?r.urls[0].target:"/",disableSource:!0,onAddedRedirect:p.reload},null,8,["urls","target","onAddedRedirect"]))])]),_:1},8,["show"])])):d("",!0)}const P=b($,[["render",N]]),l=document.createElement("div");l.id="aioseo-redirects-add-redirect-standalone";document.body.appendChild(l);let s=C({...P,name:"Standalone/Redirects/AddRedirect"});s=A(s);s=w(s);E(s);s.mount("#aioseo-redirects-add-redirect-standalone");