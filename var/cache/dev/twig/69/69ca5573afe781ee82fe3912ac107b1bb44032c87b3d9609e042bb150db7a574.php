<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_00dda934d659bac1b49445669c65c63a8068cc8a336df19b4baedb66b25724e6 extends Twig_Template
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
        $__internal_c1675a9a2071ca117a9b33905c047df81fe6aa5cdc0d9434ec0251f275270cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1675a9a2071ca117a9b33905c047df81fe6aa5cdc0d9434ec0251f275270cb0->enter($__internal_c1675a9a2071ca117a9b33905c047df81fe6aa5cdc0d9434ec0251f275270cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2c82e2f0a4f8cfb071eeaea735b2b08a0ccc3eeece5519f0392292c2f2e8016b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c82e2f0a4f8cfb071eeaea735b2b08a0ccc3eeece5519f0392292c2f2e8016b->enter($__internal_2c82e2f0a4f8cfb071eeaea735b2b08a0ccc3eeece5519f0392292c2f2e8016b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c1675a9a2071ca117a9b33905c047df81fe6aa5cdc0d9434ec0251f275270cb0->leave($__internal_c1675a9a2071ca117a9b33905c047df81fe6aa5cdc0d9434ec0251f275270cb0_prof);

        
        $__internal_2c82e2f0a4f8cfb071eeaea735b2b08a0ccc3eeece5519f0392292c2f2e8016b->leave($__internal_2c82e2f0a4f8cfb071eeaea735b2b08a0ccc3eeece5519f0392292c2f2e8016b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
