import{e as l,w as i,a as c}from"./isArrayLikeObject.71906cce.js";import{b as p}from"./_getTag.3f649f93.js";function f(n){return l(n)?i(n):p(n)}function y(n,t){for(var r=-1,e=t.length,s=n.length;++r<e;)n[s+r]=t[r];return n}function m(n,t){for(var r=-1,e=n==null?0:n.length,s=0,o=[];++r<e;){var u=n[r];t(u,r,n)&&(o[s++]=u)}return o}function g(){return[]}var _=Object.prototype,h=_.propertyIsEnumerable,a=Object.getOwnPropertySymbols,A=a?function(n){return n==null?[]:(n=Object(n),m(a(n),function(t){return h.call(n,t)}))}:g;const b=A;function v(n,t,r){var e=t(n);return c(n)?e:y(e,r(n))}function k(n){return v(n,f,b)}export{y as a,b,v as c,m as d,k as g,f as k,g as s};
