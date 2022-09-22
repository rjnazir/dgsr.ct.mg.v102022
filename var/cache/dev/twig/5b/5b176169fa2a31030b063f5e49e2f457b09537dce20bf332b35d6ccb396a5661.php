<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2f8c0719122ef92bf43a98e6012a432b3d15f4837d976088f6cdaea2a9aa655a extends Twig_Template
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
        $__internal_5c9f6cb2c33e72457294f7aeddf64be0bb72bdc76bed4ba79535c068c4ae18bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9f6cb2c33e72457294f7aeddf64be0bb72bdc76bed4ba79535c068c4ae18bf->enter($__internal_5c9f6cb2c33e72457294f7aeddf64be0bb72bdc76bed4ba79535c068c4ae18bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6dd04f2f31e978ce50c2a6ad02e0b092f8547bd64d73330e03155d4158f98358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd04f2f31e978ce50c2a6ad02e0b092f8547bd64d73330e03155d4158f98358->enter($__internal_6dd04f2f31e978ce50c2a6ad02e0b092f8547bd64d73330e03155d4158f98358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5c9f6cb2c33e72457294f7aeddf64be0bb72bdc76bed4ba79535c068c4ae18bf->leave($__internal_5c9f6cb2c33e72457294f7aeddf64be0bb72bdc76bed4ba79535c068c4ae18bf_prof);

        
        $__internal_6dd04f2f31e978ce50c2a6ad02e0b092f8547bd64d73330e03155d4158f98358->leave($__internal_6dd04f2f31e978ce50c2a6ad02e0b092f8547bd64d73330e03155d4158f98358_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
