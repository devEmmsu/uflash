<?php 

namespace Hugueso\Uflash;

class UflashNotifier
{

    /**
     * The session writer.
     *
     * @var UflashSessionStore
     */
    private $session;

    /**
     * Create a new flash notifier instance.
     *
     * @param UflashSessionStore $session
     */
    function __construct(UflashSessionStore $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an information message.
     *
     * @param string $message
     * @param string $link
     */
    public function info($message, $link = '#')
    {
        $this->message($message, $link, 'info');

        return $this;
    }

    

    /**
     * Flash an error message.
     *
     * @param  string $message
     * @param  string $link
     * @return $this
     */
    public function error($message, $link = '#')
    {
        $this->message($message, $link, 'danger');

        return $this;
    }

    

    /**
     * Flash a  warning message.
     *
     * @param  string $message
     * @param  string $link
     * @return $this
     */
    public function warning($message, $link = '#')
    {
        $this->message($message, $link, 'warning');

        return $this;
    }

    /**
     * Flash a  success message.
     *
     * @param  string $message
     * @param  string $link
     * @return $this
     */
    public function success($message, $link = '#')
    {
        $this->message($message, $link, 'success');

        return $this;
    }


  

    /**
     * Flash a general message.
     *
     * @param  string $message
     * @param  string $link
     * @param  string $type
     * @return $this
     */
    public function message($message, $link = '#', $type = 'success')
    {
        $this->session->uflash('uflash_notifiied.message', $message);
        $this->session->uflash('uflash_notifiied.link', $link);
        $this->session->uflash('uflash_notifiied.type', $type);

        return $this;
    }
}