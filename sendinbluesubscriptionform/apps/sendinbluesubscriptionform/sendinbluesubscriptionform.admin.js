SCHLIX.CMS.sendinbluesubscriptionformAdminController = class extends SCHLIX.CMS.BaseController  {  
    /**
     * Constructor
     */
    constructor ()
    {
        super("sendinbluesubscriptionform");
    };
 
    runCommand (command, evt)
    {
        switch (command)
        {
            case 'config':
                this.redirectToCMSCommand("editconfig");
                return true;
                break;
            
            default:
                return super.runCommand(command, evt);
                break;
        }
    }
};


