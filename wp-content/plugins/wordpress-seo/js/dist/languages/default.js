(()=>{"use strict";var e={d:(t,s)=>{for(var r in s)e.o(s,r)&&!e.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:s[r]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r:e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};e.r(t),e.d(t,{default:()=>o});const s=window.yoast.analysis,{baseStemmer:r}=s.languageProcessing;function n(){return r}const{AbstractResearcher:a}=s.languageProcessing;class o extends a{constructor(e){super(e),delete this.defaultResearches.getFleschReadingScore,delete this.defaultResearches.getPassiveVoiceResult,delete this.defaultResearches.getSentenceBeginnings,delete this.defaultResearches.findTransitionWords,delete this.defaultResearches.functionWordsInKeyphrase,Object.assign(this.config,{functionWords:[]}),Object.assign(this.helpers,{getStemmer:n})}}(window.yoast=window.yoast||{}).Researcher=t})();