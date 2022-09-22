<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_876aa941235daf637412ff12bdf4c10af0af25db7208f9633ae1902cd44c1b29 extends Twig_Template
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
        $__internal_d8f0d997d98650bdaab15858fdb88365044378b7e83226ddbde926db3c753ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f0d997d98650bdaab15858fdb88365044378b7e83226ddbde926db3c753ee6->enter($__internal_d8f0d997d98650bdaab15858fdb88365044378b7e83226ddbde926db3c753ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a265e33619556dd265be233d4fef8ddcdec5dc8968f6eefc268f12976e79bf62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a265e33619556dd265be233d4fef8ddcdec5dc8968f6eefc268f12976e79bf62->enter($__internal_a265e33619556dd265be233d4fef8ddcdec5dc8968f6eefc268f12976e79bf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d8f0d997d98650bdaab15858fdb88365044378b7e83226ddbde926db3c753ee6->leave($__internal_d8f0d997d98650bdaab15858fdb88365044378b7e83226ddbde926db3c753ee6_prof);

        
        $__internal_a265e33619556dd265be233d4fef8ddcdec5dc8968f6eefc268f12976e79bf62->leave($__internal_a265e33619556dd265be233d4fef8ddcdec5dc8968f6eefc268f12976e79bf62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
