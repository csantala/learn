(function(){function t(t){function n(t){t+="";var e=t.split(":"),n=~t.indexOf("-")?-1:1,s=Math.abs(+e[0]),r=parseInt(e[1],10)||0,i=parseInt(e[2],10)||0;return n*(60*s+r+i/60)}function s(t,e,s,r,i,u,a,o,h,f){this.name=t,this.startYear=+e,this.endYear=+s,this.month=+r,this.day=+i,this.dayRule=+u,this.time=n(a),this.timeRule=+o,this.offset=n(h),this.letters=f||""}function r(t,e){this.rule=e,this.start=e.start(t)}function i(t,e){return t.isLast?-1:e.isLast?1:e.start-t.start}function u(t){this.name=t,this.rules=[]}function a(e,s,r,i,u,a){var o,h="string"==typeof u?u.split("_"):[9999];for(this.name=e,this.offset=n(s),this.ruleSet=r,this.letters=i,o=0;h.length>o;o++)h[o]=+h[o];this.until=t.utc(h).subtract("m",n(a))}function o(t,e){return t.until-e.until}function h(t){this.name=d(t),this.displayName=t,this.zones=[]}function f(t){var e,n,s;for(e in t)for(s=t[e],n=0;s.length>n;n++)l(e+"   "+s[n])}function l(t){if(g[t])return g[t];var e=t.split(/\s/),n=d(e[0]),r=new s(n,e[1],e[2],e[3],e[4],e[5],e[6],e[7],e[8],e[9],e[10]);return g[t]=r,z(n).add(r),r}function d(t){return(t||"").toLowerCase().replace(/\//g,"_")}function c(t){var e,n,s;for(e in t)for(s=t[e],n=0;s.length>n;n++)p(e+"   "+s[n])}function m(t){var e;for(e in t)A[d(e)]=d(t[e])}function p(t){if(b[t])return b[t];var e=t.split(/\s/),n=d(e[0]),s=new a(n,e[1],z(e[2]),e[3],e[4],e[5]);return b[t]=s,y(e[0]).add(s),s}function z(t){return t=d(t),Y[t]||(Y[t]=new u(t)),Y[t]}function y(t){var e=d(t);return A[e]&&(e=A[e]),M[e]||(M[e]=new h(t)),M[e]}function v(t){t&&(t.zones&&c(t.zones),t.rules&&f(t.rules),t.links&&m(t.links))}var R,w=t.fn.zoneName,_=t.fn.zoneAbbr,g={},Y={},b={},M={},A={},k=1,L=2,N=7,q=8;return s.prototype={contains:function(t){return t>=this.startYear&&this.endYear>=t},start:function(e){return e=Math.min(Math.max(e,this.startYear),this.endYear),t.utc([e,this.month,this.date(e),0,this.time])},date:function(t){return this.dayRule===N?this.day:this.dayRule===q?this.lastWeekday(t):this.weekdayAfter(t)},weekdayAfter:function(e){for(var n=this.day,s=t([e,this.month,1]).day(),r=this.dayRule+1-s;n>r;)r+=7;return r},lastWeekday:function(e){var n=this.day,s=n%7,r=t([e,this.month+1,1]).day(),i=t([e,this.month,1]).daysInMonth(),u=i+(s-(r-1))-7*~~(n/7);return s>=r&&(u-=7),u}},r.prototype={equals:function(t){return t&&t.rule===this.rule?864e5>Math.abs(t.start-this.start):!1}},u.prototype={add:function(t){this.rules.push(t)},ruleYears:function(t,e){var n,s,u,a=t.year(),o=[];for(n=0;this.rules.length>n;n++)s=this.rules[n],s.contains(a)?o.push(new r(a,s)):s.contains(a+1)&&o.push(new r(a+1,s));return o.push(new r(a-1,this.lastYearRule(a-1))),e&&(u=new r(a-1,e.lastRule()),u.start=e.until.clone().utc(),u.isLast=e.ruleSet!==this,o.push(u)),o.sort(i),o},rule:function(t,e,n){var s,r,i,u,a,o=this.ruleYears(t,n),h=0;for(n&&(r=n.offset+n.lastRule().offset,i=9e4*Math.abs(r)),a=o.length-1;a>-1;a--)u=s,s=o[a],s.equals(u)||(n&&!s.isLast&&i>=Math.abs(s.start-n.until)&&(h+=r-e),s.rule.timeRule===L&&(h=e),s.rule.timeRule!==k&&s.start.add("m",-h),h=s.rule.offset+e);for(a=0;o.length>a;a++)if(s=o[a],t>=s.start&&!s.isLast)return s.rule;return R},lastYearRule:function(t){var e,n,s,r=R,i=-1e30;for(e=0;this.rules.length>e;e++)n=this.rules[e],t>=n.startYear&&(s=n.start(t),s>i&&(i=s,r=n));return r}},a.prototype={rule:function(t,e){return this.ruleSet.rule(t,this.offset,e)},lastRule:function(){return this._lastRule||(this._lastRule=this.rule(this.until)),this._lastRule},format:function(t){return this.letters.replace("%s",t.letters)}},h.prototype={zoneAndRule:function(t){var e,n,s;for(t=t.clone().utc(),e=0;this.zones.length>e&&(n=this.zones[e],!(n.until>t));e++)s=n;return[n,n.rule(t,s)]},add:function(t){this.zones.push(t),this.zones.sort(o)},format:function(t){var e=this.zoneAndRule(t);return e[0].format(e[1])},offset:function(t){var e=this.zoneAndRule(t);return-(e[0].offset+e[1].offset)}},t.updateOffset=function(t){var e;t._z&&(e=t._z.offset(t),16>Math.abs(e)&&(e/=60),t.zone(e))},t.fn.tz=function(e){return e?(this._z=y(e),this._z&&t.updateOffset(this),this):this._z?this._z.displayName:void 0},t.fn.zoneName=function(){return this._z?this._z.format(this):w.call(this)},t.fn.zoneAbbr=function(){return this._z?this._z.format(this):_.call(this)},t.tz=function(){var e,n=[],s=arguments.length-1;for(e=0;s>e;e++)n[e]=arguments[e];return t.apply(null,n).tz(arguments[s])},t.tz.add=v,t.tz.addRule=l,t.tz.addZone=p,t.tz.version=e,R=l("- 0 9999 0 0 0 0 0 0"),t}var e="0.0.1";"function"==typeof define&&define.amd?define("moment-timezone",["moment"],t):"undefined"!=typeof window&&window.moment?t(window.moment):"undefined"!=typeof module&&(module.exports=t(require("./moment")))}).apply(this);