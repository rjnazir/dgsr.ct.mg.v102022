<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7277c7ee0d4b964e822e4091e5294b62d5b3f022c05f7e530a853849dacb3d3d extends Twig_Template
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
        $__internal_b5266c24621b86a9d9889912a1ddad06ddda68d49bd1cc21de9830f5c022c602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5266c24621b86a9d9889912a1ddad06ddda68d49bd1cc21de9830f5c022c602->enter($__internal_b5266c24621b86a9d9889912a1ddad06ddda68d49bd1cc21de9830f5c022c602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_cb6ea34d0e51e23b5345d1607ca26514dc29be42282bb7a44b5c68a2130b76dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6ea34d0e51e23b5345d1607ca26514dc29be42282bb7a44b5c68a2130b76dc->enter($__internal_cb6ea34d0e51e23b5345d1607ca26514dc29be42282bb7a44b5c68a2130b76dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b5266c24621b86a9d9889912a1ddad06ddda68d49bd1cc21de9830f5c022c602->leave($__internal_b5266c24621b86a9d9889912a1ddad06ddda68d49bd1cc21de9830f5c022c602_prof);

        
        $__internal_cb6ea34d0e51e23b5345d1607ca26514dc29be42282bb7a44b5c68a2130b76dc->leave($__internal_cb6ea34d0e51e23b5345d1607ca26514dc29be42282bb7a44b5c68a2130b76dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
