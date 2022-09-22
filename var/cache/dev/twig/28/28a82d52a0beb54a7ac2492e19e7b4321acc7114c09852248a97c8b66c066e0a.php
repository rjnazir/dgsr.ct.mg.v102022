<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7edf94b79d278209297326c7f026a6b1e9cc02ce1d52c76e1167c477c5b47c58 extends Twig_Template
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
        $__internal_753db258e27282bf9636302112daee343517a63a2506f249d860f2290b9b2630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753db258e27282bf9636302112daee343517a63a2506f249d860f2290b9b2630->enter($__internal_753db258e27282bf9636302112daee343517a63a2506f249d860f2290b9b2630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ecaf2a6e3755fee5454948fc66930d8ed74bbc93c6a478c98c4c2c98a1b309aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecaf2a6e3755fee5454948fc66930d8ed74bbc93c6a478c98c4c2c98a1b309aa->enter($__internal_ecaf2a6e3755fee5454948fc66930d8ed74bbc93c6a478c98c4c2c98a1b309aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_753db258e27282bf9636302112daee343517a63a2506f249d860f2290b9b2630->leave($__internal_753db258e27282bf9636302112daee343517a63a2506f249d860f2290b9b2630_prof);

        
        $__internal_ecaf2a6e3755fee5454948fc66930d8ed74bbc93c6a478c98c4c2c98a1b309aa->leave($__internal_ecaf2a6e3755fee5454948fc66930d8ed74bbc93c6a478c98c4c2c98a1b309aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
