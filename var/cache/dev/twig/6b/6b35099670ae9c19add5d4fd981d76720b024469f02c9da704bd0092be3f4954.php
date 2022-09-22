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
        $__internal_b51fa9daa395cd67d674cb3ecb3007524bce2563ba90937eed828c399fe2bfd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51fa9daa395cd67d674cb3ecb3007524bce2563ba90937eed828c399fe2bfd1->enter($__internal_b51fa9daa395cd67d674cb3ecb3007524bce2563ba90937eed828c399fe2bfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_23d7f6f3c94fb3eaf7823bdceac7cb0a5f7d2c7f2d3f3ae648aa281ef8dc9353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d7f6f3c94fb3eaf7823bdceac7cb0a5f7d2c7f2d3f3ae648aa281ef8dc9353->enter($__internal_23d7f6f3c94fb3eaf7823bdceac7cb0a5f7d2c7f2d3f3ae648aa281ef8dc9353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b51fa9daa395cd67d674cb3ecb3007524bce2563ba90937eed828c399fe2bfd1->leave($__internal_b51fa9daa395cd67d674cb3ecb3007524bce2563ba90937eed828c399fe2bfd1_prof);

        
        $__internal_23d7f6f3c94fb3eaf7823bdceac7cb0a5f7d2c7f2d3f3ae648aa281ef8dc9353->leave($__internal_23d7f6f3c94fb3eaf7823bdceac7cb0a5f7d2c7f2d3f3ae648aa281ef8dc9353_prof);

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
