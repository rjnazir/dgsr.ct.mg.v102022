<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_ea48e75a3214abad669a3bcf4ee71ca50b52d3f2483360c7a55f396638c65b6d extends Twig_Template
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
        $__internal_bf16058071179b0210699fee1b1e291fd726966b996df25f610e7744d763df99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf16058071179b0210699fee1b1e291fd726966b996df25f610e7744d763df99->enter($__internal_bf16058071179b0210699fee1b1e291fd726966b996df25f610e7744d763df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7482270a9349c19ce143bd71e43c7d5ee9b9bbab871eeceeed4f215b144602fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7482270a9349c19ce143bd71e43c7d5ee9b9bbab871eeceeed4f215b144602fb->enter($__internal_7482270a9349c19ce143bd71e43c7d5ee9b9bbab871eeceeed4f215b144602fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_bf16058071179b0210699fee1b1e291fd726966b996df25f610e7744d763df99->leave($__internal_bf16058071179b0210699fee1b1e291fd726966b996df25f610e7744d763df99_prof);

        
        $__internal_7482270a9349c19ce143bd71e43c7d5ee9b9bbab871eeceeed4f215b144602fb->leave($__internal_7482270a9349c19ce143bd71e43c7d5ee9b9bbab871eeceeed4f215b144602fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
