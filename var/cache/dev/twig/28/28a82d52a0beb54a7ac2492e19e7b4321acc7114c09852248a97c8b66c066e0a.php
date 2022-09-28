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
        $__internal_b455c5f00b45b88cebce2a61f3baa3533747c46808e4c437e6d57787d0e86939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b455c5f00b45b88cebce2a61f3baa3533747c46808e4c437e6d57787d0e86939->enter($__internal_b455c5f00b45b88cebce2a61f3baa3533747c46808e4c437e6d57787d0e86939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_83effcabc04b26ee6476d574f2589695475a1a30d48c3df7112707b1f5480d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83effcabc04b26ee6476d574f2589695475a1a30d48c3df7112707b1f5480d16->enter($__internal_83effcabc04b26ee6476d574f2589695475a1a30d48c3df7112707b1f5480d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b455c5f00b45b88cebce2a61f3baa3533747c46808e4c437e6d57787d0e86939->leave($__internal_b455c5f00b45b88cebce2a61f3baa3533747c46808e4c437e6d57787d0e86939_prof);

        
        $__internal_83effcabc04b26ee6476d574f2589695475a1a30d48c3df7112707b1f5480d16->leave($__internal_83effcabc04b26ee6476d574f2589695475a1a30d48c3df7112707b1f5480d16_prof);

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
