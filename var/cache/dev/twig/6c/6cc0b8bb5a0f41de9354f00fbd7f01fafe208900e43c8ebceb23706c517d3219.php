<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_88581fbc8d6783d159180bbdf196fd46cdeaa8c9006bd958c96d4ffb0f45ac30 extends Twig_Template
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
        $__internal_117d8573155159db109a91a7a44430c74e9c9ad4caeb468f4f8620fd46721634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117d8573155159db109a91a7a44430c74e9c9ad4caeb468f4f8620fd46721634->enter($__internal_117d8573155159db109a91a7a44430c74e9c9ad4caeb468f4f8620fd46721634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_98d70094c5567722a94ce51f17461422da2535e5bf50eb60b7426b2243e7fff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d70094c5567722a94ce51f17461422da2535e5bf50eb60b7426b2243e7fff9->enter($__internal_98d70094c5567722a94ce51f17461422da2535e5bf50eb60b7426b2243e7fff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_117d8573155159db109a91a7a44430c74e9c9ad4caeb468f4f8620fd46721634->leave($__internal_117d8573155159db109a91a7a44430c74e9c9ad4caeb468f4f8620fd46721634_prof);

        
        $__internal_98d70094c5567722a94ce51f17461422da2535e5bf50eb60b7426b2243e7fff9->leave($__internal_98d70094c5567722a94ce51f17461422da2535e5bf50eb60b7426b2243e7fff9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
