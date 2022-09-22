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
        $__internal_8834ca1e0c77ef37283fa55e61ce6c8f78e2b05be23d6658f2fafb8f7113ce25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8834ca1e0c77ef37283fa55e61ce6c8f78e2b05be23d6658f2fafb8f7113ce25->enter($__internal_8834ca1e0c77ef37283fa55e61ce6c8f78e2b05be23d6658f2fafb8f7113ce25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_9ea67ea4dc2dd37e186580582e4db6c25993730e5ba449975b0909e58d6abcaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea67ea4dc2dd37e186580582e4db6c25993730e5ba449975b0909e58d6abcaa->enter($__internal_9ea67ea4dc2dd37e186580582e4db6c25993730e5ba449975b0909e58d6abcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_8834ca1e0c77ef37283fa55e61ce6c8f78e2b05be23d6658f2fafb8f7113ce25->leave($__internal_8834ca1e0c77ef37283fa55e61ce6c8f78e2b05be23d6658f2fafb8f7113ce25_prof);

        
        $__internal_9ea67ea4dc2dd37e186580582e4db6c25993730e5ba449975b0909e58d6abcaa->leave($__internal_9ea67ea4dc2dd37e186580582e4db6c25993730e5ba449975b0909e58d6abcaa_prof);

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
