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
        $__internal_e8c477256998bcd7431b2857ca09093ba26dc9b59f5db64b8293ef7aa4fccb4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c477256998bcd7431b2857ca09093ba26dc9b59f5db64b8293ef7aa4fccb4a->enter($__internal_e8c477256998bcd7431b2857ca09093ba26dc9b59f5db64b8293ef7aa4fccb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_943af9886174b739f062594cf9ea343cb59dbdbb213985763299154768ad88ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943af9886174b739f062594cf9ea343cb59dbdbb213985763299154768ad88ff->enter($__internal_943af9886174b739f062594cf9ea343cb59dbdbb213985763299154768ad88ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e8c477256998bcd7431b2857ca09093ba26dc9b59f5db64b8293ef7aa4fccb4a->leave($__internal_e8c477256998bcd7431b2857ca09093ba26dc9b59f5db64b8293ef7aa4fccb4a_prof);

        
        $__internal_943af9886174b739f062594cf9ea343cb59dbdbb213985763299154768ad88ff->leave($__internal_943af9886174b739f062594cf9ea343cb59dbdbb213985763299154768ad88ff_prof);

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
