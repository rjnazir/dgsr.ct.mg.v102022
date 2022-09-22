<?php

/* @Admin/CtProcesVerbal/edit.html.twig */
class __TwigTemplate_0615790c0322bdd3396d41e1c3ca3e2cac37b6f8de785325934a2939b018667b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProcesVerbal/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe5f1fb3359a5f5f7961c6ea73718fbf4165c36ae44468c8a2fb515542a9bcd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5f1fb3359a5f5f7961c6ea73718fbf4165c36ae44468c8a2fb515542a9bcd3->enter($__internal_fe5f1fb3359a5f5f7961c6ea73718fbf4165c36ae44468c8a2fb515542a9bcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/edit.html.twig"));

        $__internal_02d4462ec616d6bf06a8733079188ed9413809c8c6fd423df52c6795088ff4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d4462ec616d6bf06a8733079188ed9413809c8c6fd423df52c6795088ff4ca->enter($__internal_02d4462ec616d6bf06a8733079188ed9413809c8c6fd423df52c6795088ff4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe5f1fb3359a5f5f7961c6ea73718fbf4165c36ae44468c8a2fb515542a9bcd3->leave($__internal_fe5f1fb3359a5f5f7961c6ea73718fbf4165c36ae44468c8a2fb515542a9bcd3_prof);

        
        $__internal_02d4462ec616d6bf06a8733079188ed9413809c8c6fd423df52c6795088ff4ca->leave($__internal_02d4462ec616d6bf06a8733079188ed9413809c8c6fd423df52c6795088ff4ca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2f75462b415429cead36bd8769e7b773a2c5ef993ac2e16c32e03942b9b7167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f75462b415429cead36bd8769e7b773a2c5ef993ac2e16c32e03942b9b7167->enter($__internal_c2f75462b415429cead36bd8769e7b773a2c5ef993ac2e16c32e03942b9b7167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eda21c88c6ad8d1c75e332dcfcafea2bb7d64557f4b2fe472e2cc21b20e9aa77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda21c88c6ad8d1c75e332dcfcafea2bb7d64557f4b2fe472e2cc21b20e9aa77->enter($__internal_eda21c88c6ad8d1c75e332dcfcafea2bb7d64557f4b2fe472e2cc21b20e9aa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Proces Verbal ";
        
        $__internal_eda21c88c6ad8d1c75e332dcfcafea2bb7d64557f4b2fe472e2cc21b20e9aa77->leave($__internal_eda21c88c6ad8d1c75e332dcfcafea2bb7d64557f4b2fe472e2cc21b20e9aa77_prof);

        
        $__internal_c2f75462b415429cead36bd8769e7b773a2c5ef993ac2e16c32e03942b9b7167->leave($__internal_c2f75462b415429cead36bd8769e7b773a2c5ef993ac2e16c32e03942b9b7167_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_28965c58bdf94594a357b09958293e7c604ed95ec3c20bf254d450619f00164d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28965c58bdf94594a357b09958293e7c604ed95ec3c20bf254d450619f00164d->enter($__internal_28965c58bdf94594a357b09958293e7c604ed95ec3c20bf254d450619f00164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3b3e6cb5dafef5ac8a04ff4e3a119fcf5f89820f9b3c0c0b985e17004c0f9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b3e6cb5dafef5ac8a04ff4e3a119fcf5f89820f9b3c0c0b985e17004c0f9ab->enter($__internal_a3b3e6cb5dafef5ac8a04ff4e3a119fcf5f89820f9b3c0c0b985e17004c0f9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvType", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvTarif", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_a3b3e6cb5dafef5ac8a04ff4e3a119fcf5f89820f9b3c0c0b985e17004c0f9ab->leave($__internal_a3b3e6cb5dafef5ac8a04ff4e3a119fcf5f89820f9b3c0c0b985e17004c0f9ab_prof);

        
        $__internal_28965c58bdf94594a357b09958293e7c604ed95ec3c20bf254d450619f00164d->leave($__internal_28965c58bdf94594a357b09958293e7c604ed95ec3c20bf254d450619f00164d_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProcesVerbal/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 36,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Proces Verbal {% endblock %}

{% set menu_proces_verbal = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.pvType) }}
                        {{ form_row(edit_form.pvTarif) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"{{ path('proces_verbal_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtProcesVerbal/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProcesVerbal\\edit.html.twig");
    }
}
