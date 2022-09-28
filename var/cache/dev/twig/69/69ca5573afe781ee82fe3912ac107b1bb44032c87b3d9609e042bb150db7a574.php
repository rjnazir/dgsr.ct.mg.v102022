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
        $__internal_31291b6de6fd5f7a10988d425412e7956b9b73184ec97ac3ed489422527ddd3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31291b6de6fd5f7a10988d425412e7956b9b73184ec97ac3ed489422527ddd3d->enter($__internal_31291b6de6fd5f7a10988d425412e7956b9b73184ec97ac3ed489422527ddd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_af7b9da3e93fa791ba54205ca39e19e2609a7a21abb1a0c3d8cb174d51847066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7b9da3e93fa791ba54205ca39e19e2609a7a21abb1a0c3d8cb174d51847066->enter($__internal_af7b9da3e93fa791ba54205ca39e19e2609a7a21abb1a0c3d8cb174d51847066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_31291b6de6fd5f7a10988d425412e7956b9b73184ec97ac3ed489422527ddd3d->leave($__internal_31291b6de6fd5f7a10988d425412e7956b9b73184ec97ac3ed489422527ddd3d_prof);

        
        $__internal_af7b9da3e93fa791ba54205ca39e19e2609a7a21abb1a0c3d8cb174d51847066->leave($__internal_af7b9da3e93fa791ba54205ca39e19e2609a7a21abb1a0c3d8cb174d51847066_prof);

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
