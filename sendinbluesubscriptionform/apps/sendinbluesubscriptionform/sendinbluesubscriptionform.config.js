/**
 * 
 *
 * @license MIT
 *
 * @package sendinbluesubscriptionform
 * @version 1.0
 * @author  Roy Hadrianoro <dev@maysora.com>
 * @link    https://www.schlix.com
 */


SCHLIX.Event.onDOMReady(function(){
  SCHLIX.Event.on('api_key_help','click',function(){
    var obj = SCHLIX.CMS.getObject('sendinblue-api-key-help-dialog');
    doShow = !obj.dialog.cfg.getProperty('visible');
    (doShow) ? obj.show() : obj.hide(true);
  });
  SCHLIX.Event.on('list_ids_help','click',function(){
    var obj = SCHLIX.CMS.getObject('sendinblue-list-ids-help-dialog');
    doShow = !obj.dialog.cfg.getProperty('visible');
    (doShow) ? obj.show() : obj.hide(true);
  });
});
