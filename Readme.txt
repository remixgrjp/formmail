���\�t�g����
	�t�H�[�����[��

���o�[�W����
	1.0

���\�t�g�̊T�v
	�@���Y�t���[�����[�N ethna �œ��삷�� �ȒP�ȃt�H�[�����[�� �� �v�d�a�A�v���P
	�[�V�����ł��B
	�@PHP�t���[�����[�N�̗����Ɣ��W���@�̊w�K�ɂ��傤�ǂ����K�͂��Ǝv���܂��B

		�@�G���g���|�C���g(Index)
		�@�@�@��
		��������������
		��   Form   �����[���E�R�����g����
		��������������
		�@�@�@
		�@�m�F(Confirm)�� �G���[ �� Form
		�@�@�@��
		��������������
		�� Confirm  �� �N���A(Clear) �� Form
		��������������
		�@�@�@
		�@���M(Send)�� �G���[ �� Form
		�@�@�@��
		�@�@�@���� ���[�����M
		�@�@�@��
		��������������
		�� Complete �� �߂�(Index)�� Form
		��������������

	�@���̃X�e�b�v�Ƃ��āA�f�U�C���A���͍��ځA��ʑJ��(�A�N�V�����E�r���[)�A�f�[
	�^�x�[�X�����l�����܂��B

���������
	�@�ݒu�Ώۂ̃T�[�o�ŁAApache �Ȃǂ̂v�d�a�T�[�o���� php �����s�ł��A���[���]
	�����ł��Ă���K�v������܂��B�t���[�����[�N Ethna �́A����o�[�W���� 2.5.0�B
	���̑��̏ڍׂȃ��W���[���́A���ꂼ�ꉺ�L���Q�l�Ƀ_�E�����[�h���C���X�g�[�����Ă��������B
	http://ethna.jp/

	����m�F�ς̊���P
		CentOS release 5.8 (Final)
		Sendmail 8.13.8-8.1.el5_7
		Apache 2.0
		PHP Version 5.1.6
		php-mbstring 5.1.6-34.el5_8
		PEAR Version: 1.9.4
			�ipear list�j
			Archive_Tar      1.3.10
			Console_Getopt   1.3.1
			DB               1.7.14
			PEAR             1.9.4
			Structures_Graph 1.0.4
			XML_RPC          1.5.5
			XML_Util         1.2.1
		Smarty-2.6.26
		Ethna 2.5.0

	����m�F�ς̊���Q
		CentOS release 6.2 (Final)
		Postfix 2:2.6.6-2.2.el6_1
		Apache 2.0
		PHP Version 5.3.3 
		php-mbstring 5.3.3-3.el6_2.8
		PEAR Version: 1.9.4
			�ipear list�j
			Archive_Tar      1.3.7
			Console_Getopt   1.2.3
			DB               1.7.14
			PEAR             1.9.4
			Structures_Graph 1.0.4
			XML_RPC          1.5.4
			XML_Util         1.2.1
		Smarty-2.6.26
		Ethna 2.5.0

	�@�\�[�X�� UTF-8 �ł��B

���C���X�g�[���̎菇
	�P�D�ݒu�Ώۂ̃T�[�o�Œ��ڃ_�E�����[�h�E�𓀂��邩�A�𓀍ς݂̑S�Ẵt�@�C
	�����f�B�N�g���\���̂܂܂e�s�o�Őݒu���܂��B

	�@��v�ȃt�@�C���ƃf�B�N�g���\��
		formmail
		����etc
		��      formmail-ini.php	���ݒ�t�@�C��
		��
		����locale
		����www
		��  ��  unittest.php
		��  ��  xmlrpc.php
		��  ��  info.php
		��  ��  index.php	���G���g���[�|�C���g
		��  ��
		��  ����css
		��  ����js
		��
		����template		���e���v���[�g
		��  ����ja_JP
		��      ��  Form.tpl
		��      ��  Debug.tpl
		��      ��  Complete.tpl
		��      ��  Confirm.tpl
		��      ��  Index.tpl
		��      ��
		��      ����mail
		��              Mail.tpl
		��
		����bin
		����app
		����log		�����O�f�B���N�g��
		��      formmail.log
		��
		����schema
		����skel
		����tmp		���e���|�����f�B���N�g��
		��
		����lib

	�Q�D�K�v�ŏ����̃p�[�~�b�V�����ݒ�B
	�@�G���g���[�|�C���g�ɂ͕s����҂̎Q�ƌ�����t���܂��B
	�@���O�f�B���N�g���̌����� rwxrwxrwx �Ƃ��܂��B
	�@�e���|�����f�B���N�g���̌����� rwxrwxrwx �Ƃ��܂��B

	�R�D�v�d�a�T�[�o��DocumentRoot��ύX���邱�Ƃ��\�Ȃ�΁A�𓀂��� www �t�H
	���_�� DocumentRoot �ɂ���̂��ł��ȒP�ł��B
	�@������ DocumentRoot �ɔz�u�������ꍇ�A�V���{���b�N�����N�𒣂邩�A�G���g��
	�[�|�C���g���܂ށAwww �t�H���_���̃t�@�C���������� DocumentRoot �ɔz�u�� �G
	���g���[�|�C���g�t�@�C���̂Q�s��
		require_once dirname(__FILE__) . '/../app/Formmail_Controller.php';
	��
		require_once '/var/http/formmail/app/Formmail_Controller.php';
	�̂悤�Ȑ�΃p�X�ɏ��������܂��B
	�@�����܂ł̐ݒ�ŁA�u���E�U�����瓮����m�F�ł���͂��ł��B

	�S�D���b�Z�[�W���󂯕t���郁�[���A�h���X�́A�ݒ�t�@�C���� 'EMAIL' �̒l�ł��B
	�T�[�o�ŊO���ւ̃��[���z�����ł��Ă���΁A�g�тȂǂɓK�X�ύX���܂��B

	�T�D�f�t�H���g�Őݒ�t�@�C���̓f�o�b�N���[�h�ƂȂ��Ă����ʂ̃��O���o�͂���
	��������w�K�̏����ɂȂ�͂��ł��B�ʏ�̉^�p�ł͐ݒ�t�@�C���̃R�����g�ɏ]
	���ă��O��}�����܂��B

���A���C���X�g�[���̎菇
	�@�C���X�g�[�����ɉ𓀂���formmail�t�H���_���ƍ폜���邾���ŃA���C���X�g�[��
	���������܂��B�v�d�a�T�[�o�̐ݒ��ύX�����ꍇ�����֖߂��̂����Y��Ȃ��B

���g�p���@
	�@����̃e���v���[�g�́A�D�݂̃f�U�C���ɃJ�X�^�}�C�Y���₷���悤�K�v�ŏ����\
	���ł��B{}�ň͂܂ꂽ�ӏ��ȊO�� HTML�ACSS�AJavaScript�����R�ɕύX�ł��܂��B

����舵�����
	�@�����ł��B
	�@��҂͖{�\�t�g�E�G�A���g�p�������Ƃɂ�萶�������Q�ɂ��Ĉ�؂̐ӔC�𕉂�
	�܂���B

�����z
	����

���������@
	�@��t���Ă���������ꍇ�A���U�����s������ԐM�������܂��̂�

		http://www.remix.asia/service/formmail/

	���A���A�����������B

�����p����
	�����͂���܂���B���p�҂̐ӔC�Őݒu�E�^�p���肢�������܂��B

���A����
	http+formmail@remix.asia
	�q�d�l�h�w

���ύX����
	2012-07-21	Version 1.0 ���Ń����[�X
