<?php
    namespace App\Models;

    use Date;
    use Session;
    use Image;

    class Messages
    {
        public static $_instance = null;
        private $system_messages = [];

        public static function inst()
        {
            if (null === self::$_instance) {
                self::$_instance = new self();
            }

            return self::$_instance;
        }

        public function setMessage($type = 'info', $message = '', $group='0')
        {
            $this->system_messages[] = array('message' => $message, 'type' => $type, 'group' => $group);
            Session::flash('system.messages', $this->system_messages);
        }

        public function systemMessagesFormatted($group = '0')
        {
            $errors = '';

            if (Session::has('system.messages')) {
                $messages = Session::get('system.messages');
                foreach ($messages as $message) {
                    if ($message['group'] != $group) {
                        continue;
                    }
                    $errors .= '
                    <div class="alert alert-' . $message['type'] . ' alert-dismissable text-center" style="margin-bottom: 1px;">
                      <button type="button" tabindex="-1" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      ' . $message['message'] . '
                    </div>';
                }
            }

            return $errors;
        }

    }
