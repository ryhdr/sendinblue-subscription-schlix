SCHLIX.CMS.sendinbluesubscriptionformController = class extends SCHLIX.CMS.Base  {  
    /**
     * Constructor
     */
    constructor ()
    {
        super("sendinbluesubscriptionform-block-item");
    };

 
    runCommand (command, evt)
    {
        console.log(arguments);
        return;
        switch (command)
        {
            // case 'config':
            //     this.redirectToCMSCommand("editconfig");
            //     return true;
            //     break;
            
            default:
                return super.runCommand(command, evt);
                break;
        }
    }
};


