<?php

/* @Admin/CtMarque/add.html.twig */
class __TwigTemplate_0e9f70888276308095b71b6b845c2cfebd3154dd7e0f4cbbc34866e1d033e9db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMarque/add.html.twig", 1);
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
        $__internal_4389c7b691215c505a8b449de38873dff987c1627a4ad393f7f2d2d043a2f387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4389c7b691215c505a8b449de38873dff987c1627a4ad393f7f2d2d043a2f387->enter($__internal_4389c7b691215c505a8b449de38873dff987c1627a4ad393f7f2d2d043a2f387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/add.html.twig"));

        $__internal_ce94199dc1465e32897e2f5f12e413ea3d6adf07e838b044cd4c021009368a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce94199dc1465e32897e2f5f12e413ea3d6adf07e838b044cd4c021009368a10->enter($__internal_ce94199dc1465e32897e2f5f12e413ea3d6adf07e838b044cd4c021009368a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_marque"] = true;
        // line 8
        $context["menu_marque_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4389c7b691215c505a8b449de38873dff987c1627a4ad393f7f2d2d043a2f387->leave($__internal_4389c7b691215c505a8b449de38873dff987c1627a4ad393f7f2d2d043a2f387_prof);

        
        $__internal_ce94199dc1465e32897e2f5f12e413ea3d6adf07e838b044cd4c021009368a10->leave($__internal_ce94199dc1465e32897e2f5f12e413ea3d6adf07e838b044cd4c021009368a10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bd14ef6b2ad19f9b48258a69739e93ba3d0d02375cc4274848b522e0306ed2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd14ef6b2ad19f9b48258a69739e93ba3d0d02375cc4274848b522e0306ed2e->enter($__internal_1bd14ef6b2ad19f9b48258a69739e93ba3d0d02375cc4274848b522e0306ed2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2be0f8052f3df7765f43cc20b0db8d3ca54760bdbcc6fe28006098ab53ccdb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be0f8052f3df7765f43cc20b0db8d3ca54760bdbcc6fe28006098ab53ccdb1e->enter($__internal_2be0f8052f3df7765f43cc20b0db8d3ca54760bdbcc6fe28006098ab53ccdb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_2be0f8052f3df7765f43cc20b0db8d3ca54760bdbcc6fe28006098ab53ccdb1e->leave($__internal_2be0f8052f3df7765f43cc20b0db8d3ca54760bdbcc6fe28006098ab53ccdb1e_prof);

        
        $__internal_1bd14ef6b2ad19f9b48258a69739e93ba3d0d02375cc4274848b522e0306ed2e->leave($__internal_1bd14ef6b2ad19f9b48258a69739e93ba3d0d02375cc4274848b522e0306ed2e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_11a8d4d8e8eb1259360e9f70d9957596092da99c6f7c370819be52c57f24ca0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a8d4d8e8eb1259360e9f70d9957596092da99c6f7c370819be52c57f24ca0b->enter($__internal_11a8d4d8e8eb1259360e9f70d9957596092da99c6f7c370819be52c57f24ca0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1633384d48160b895d2875766c45dd72d31783a8a6705e061052a9a004ff1193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1633384d48160b895d2875766c45dd72d31783a8a6705e061052a9a004ff1193->enter($__internal_1633384d48160b895d2875766c45dd72d31783a8a6705e061052a9a004ff1193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mrqLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_marque\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_1633384d48160b895d2875766c45dd72d31783a8a6705e061052a9a004ff1193->leave($__internal_1633384d48160b895d2875766c45dd72d31783a8a6705e061052a9a004ff1193_prof);

        
        $__internal_11a8d4d8e8eb1259360e9f70d9957596092da99c6f7c370819be52c57f24ca0b->leave($__internal_11a8d4d8e8eb1259360e9f70d9957596092da99c6f7c370819be52c57f24ca0b_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMarque/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Catégorie {% endblock %}

{% set menu_marque        = true %}
{% set menu_marque_create = true %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.mrqLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_marque\"/>
                        <a href=\"{{ path('marque_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtMarque/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMarque\\add.html.twig");
    }
}
