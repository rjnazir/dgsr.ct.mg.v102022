<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_f95a535d5e0584a3d0797e79ca436300e4d0c495798078e24e5904ed9ad1f4ac extends Twig_Template
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
        $__internal_2c37e326b157e47f2c7807879516c50d58fcf10c34bb2e0cf91254f0ea5a1f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c37e326b157e47f2c7807879516c50d58fcf10c34bb2e0cf91254f0ea5a1f7b->enter($__internal_2c37e326b157e47f2c7807879516c50d58fcf10c34bb2e0cf91254f0ea5a1f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_cf6804c0abd8b8b9d6e746ae20d8c9f9afe8a50c322a311cbb0068ec58395df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6804c0abd8b8b9d6e746ae20d8c9f9afe8a50c322a311cbb0068ec58395df5->enter($__internal_cf6804c0abd8b8b9d6e746ae20d8c9f9afe8a50c322a311cbb0068ec58395df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2c37e326b157e47f2c7807879516c50d58fcf10c34bb2e0cf91254f0ea5a1f7b->leave($__internal_2c37e326b157e47f2c7807879516c50d58fcf10c34bb2e0cf91254f0ea5a1f7b_prof);

        
        $__internal_cf6804c0abd8b8b9d6e746ae20d8c9f9afe8a50c322a311cbb0068ec58395df5->leave($__internal_cf6804c0abd8b8b9d6e746ae20d8c9f9afe8a50c322a311cbb0068ec58395df5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
