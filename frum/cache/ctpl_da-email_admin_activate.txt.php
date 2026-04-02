<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Aktivér brugerkonto

Hej,

Kontoen, der ejes af "<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" er blevet deaktiveret eller lige oprettet. Du bør kontrollere oplysningerne om denne bruger (hvis påkrævet) og aktivere den med følgende link:

Brug dette link til at se brugerens profil:
<?php echo (isset($this->_rootref['U_USER_DETAILS'])) ? $this->_rootref['U_USER_DETAILS'] : ''; ?>


Brug dette link til at aktivere kontoen:
<?php echo (isset($this->_rootref['U_ACTIVATE'])) ? $this->_rootref['U_ACTIVATE'] : ''; ?>



<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>