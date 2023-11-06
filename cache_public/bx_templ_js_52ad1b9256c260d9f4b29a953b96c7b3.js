
 {
function BxArtificerMenuMoreAuto(oOptions){BxDolMenuMoreAuto.call(this,oOptions)}
BxArtificerMenuMoreAuto.prototype=Object.create(BxDolMenuMoreAuto.prototype);BxArtificerMenuMoreAuto.prototype.constructor=BxArtificerMenuMoreAuto;BxArtificerMenuMoreAuto.prototype.init=function(bForceInit){BxDolMenuMoreAuto.prototype.init.call(this);var $this=this;var oImages=$('#bx-toolbar').find('img');if(!oImages.length)
$(document).ready(function(){$this.update(!0)});else oImages.bind('load',function(){setTimeout(function(){$this.update(!0)},100)})}
 }
