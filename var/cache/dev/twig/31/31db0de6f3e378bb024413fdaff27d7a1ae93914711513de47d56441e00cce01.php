<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7a6a9cc63433db4ba07e561a6e681e24d1bbba975cb97fd44bdf39ae9851a929 extends Twig_Template
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
        $__internal_0541b8587f5598e4470c80c1e028314b2f58ce14d6af66c84ba2e7b3955b0947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0541b8587f5598e4470c80c1e028314b2f58ce14d6af66c84ba2e7b3955b0947->enter($__internal_0541b8587f5598e4470c80c1e028314b2f58ce14d6af66c84ba2e7b3955b0947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_330bb0b7e8a4a7bfe401dca62be819c03e251f1f63742275a41409c189b2fd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330bb0b7e8a4a7bfe401dca62be819c03e251f1f63742275a41409c189b2fd8b->enter($__internal_330bb0b7e8a4a7bfe401dca62be819c03e251f1f63742275a41409c189b2fd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0541b8587f5598e4470c80c1e028314b2f58ce14d6af66c84ba2e7b3955b0947->leave($__internal_0541b8587f5598e4470c80c1e028314b2f58ce14d6af66c84ba2e7b3955b0947_prof);

        
        $__internal_330bb0b7e8a4a7bfe401dca62be819c03e251f1f63742275a41409c189b2fd8b->leave($__internal_330bb0b7e8a4a7bfe401dca62be819c03e251f1f63742275a41409c189b2fd8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
