<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_892cf24923da48264de859160136d3ea7ea18d549edd83306bbf306a666a7db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bcd0b52d33b9ec7c64594ff4efe0590cddea51a065a15f164167779c39e1099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bcd0b52d33b9ec7c64594ff4efe0590cddea51a065a15f164167779c39e1099->enter($__internal_6bcd0b52d33b9ec7c64594ff4efe0590cddea51a065a15f164167779c39e1099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_be6817efd8581ed35e506baa7e7c896e1b67ef7adf145c52b996abdbd754978a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6817efd8581ed35e506baa7e7c896e1b67ef7adf145c52b996abdbd754978a->enter($__internal_be6817efd8581ed35e506baa7e7c896e1b67ef7adf145c52b996abdbd754978a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6bcd0b52d33b9ec7c64594ff4efe0590cddea51a065a15f164167779c39e1099->leave($__internal_6bcd0b52d33b9ec7c64594ff4efe0590cddea51a065a15f164167779c39e1099_prof);

        
        $__internal_be6817efd8581ed35e506baa7e7c896e1b67ef7adf145c52b996abdbd754978a->leave($__internal_be6817efd8581ed35e506baa7e7c896e1b67ef7adf145c52b996abdbd754978a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
