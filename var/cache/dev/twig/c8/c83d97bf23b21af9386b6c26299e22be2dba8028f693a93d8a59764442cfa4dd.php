<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_0d3d3e561f3de2f317a66f663fcc13efa274c2c55de35ae960ce5453ff4f89a8 extends Twig_Template
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
        $__internal_7db5ac1787b9c61a0351e125b3690f94fefd81db2a281c115912b905a110208b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db5ac1787b9c61a0351e125b3690f94fefd81db2a281c115912b905a110208b->enter($__internal_7db5ac1787b9c61a0351e125b3690f94fefd81db2a281c115912b905a110208b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_99afe2c21f7de9bad1c0d7dc8aee70c7e18e84e1e77f18b0a295d9fa6d61e436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99afe2c21f7de9bad1c0d7dc8aee70c7e18e84e1e77f18b0a295d9fa6d61e436->enter($__internal_99afe2c21f7de9bad1c0d7dc8aee70c7e18e84e1e77f18b0a295d9fa6d61e436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7db5ac1787b9c61a0351e125b3690f94fefd81db2a281c115912b905a110208b->leave($__internal_7db5ac1787b9c61a0351e125b3690f94fefd81db2a281c115912b905a110208b_prof);

        
        $__internal_99afe2c21f7de9bad1c0d7dc8aee70c7e18e84e1e77f18b0a295d9fa6d61e436->leave($__internal_99afe2c21f7de9bad1c0d7dc8aee70c7e18e84e1e77f18b0a295d9fa6d61e436_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
